<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserAgentController extends Controller
{
    public $serviceId = 1;
    public function index() {
        return view('useragent.home');
    }

    public function createNewUserAgent() {
        $newlyUserAgent = false;
        $sql = 'SELECT useragent.*, ifnull(t.count_used,0) as order_used FROM useragent LEFT JOIN (
            SELECT useragent_id, count(id) AS count_used FROM used_useragent WHERE service_id=:service_id GROUP BY useragent_id ORDER BY count_used ASC LIMIT 1
            ) AS t ON useragent.id = t.useragent_id ORDER BY order_used ASC LIMIT 1;';
        $result = DB::select($sql, [
            'service_id' => $this->serviceId
        ]);
        if ($result) {
            $useragent_id = $result[0]->id;
            $useragent = $result[0]->useragent;
            $sql = 'INSERT INTO used_useragent (useragent_id,service_id,updated_at) VALUES (:useragent_id,:service_id,:updated_at);';
            $result = DB::insert($sql, [
                'useragent_id' => $useragent_id,
                'service_id' => $this->serviceId,
                'updated_at' => now()
            ]);
            if ($result) {
                return redirect()->route('useragent.index')
                    ->with([
                        'newlyUserAgent' => $useragent
                    ]);
            }
        }
        return redirect()->route('useragent.index');
    }
}
