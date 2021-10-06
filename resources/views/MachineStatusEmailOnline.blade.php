<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="color-scheme" content="light">
<meta name="supported-color-schemes" content="light">
</head>
<body>
<style>
@media only screen and (max-width: 600px) {
.inner-body {
width: 100% !important;
}

.footer {
width: 100% !important;
}
}

@media only screen and (max-width: 500px) {
.button {
width: 100% !important;
}
}
</style>

<table class="wrapper" width="100%" cellpadding="0" cellspacing="0" role="presentation" style="font-family:'-apple-system', BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol';background-color:#edf2f7;margin:0;padding:0;width:100%;color:#000;">
  <tr>
    <td align="center" style="font-family:'-apple-system', BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol';">
      <table class="content" width="100%" cellpadding="0" cellspacing="0" role="presentation" style="font-family:'-apple-system', BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol';margin:0;padding:0;width:100%;">
        <!-- Email Body -->
        <tr>
          <td class="body" width="100%" cellpadding="0" cellspacing="0" style="font-family:'-apple-system', BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol';background-color:#edf2f7;margin:0;padding:0;width:100%;">
            <table class="inner-body" align="center" cellpadding="0" cellspacing="0" role="presentation" style="font-family:'-apple-system', BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol';background-color:#ffffff;border-color:#e8e5ef;border-width:1px;margin:0 auto;padding:0;width:100%">
              <tbody>
                <!-- Body content -->
                <tr>
                  <td class="content-cell" style="font-family:'-apple-system', BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol';padding: 0 20px 0 20px;">
                    <p style="color: #000;font-family:'-apple-system', BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol';font-size:15px;line-height:1.5em;margin-top:0;text-align:left;margin-bottom: 15px">Hello,<br/></p>
                  </td>
                </tr>
                <tr>
                  <td class="content-cell" style="font-family:'-apple-system', BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol';padding: 0 20px 0 20px;">
                    <p style="color: #000;font-family:'-apple-system', BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol';font-size:15px;line-height:1.5em;margin-top:0;text-align:left;margin-bottom: 15px">We have detected that your machine is back on-line and connected. If you have any more issues please contact <a href="mailto:support@popcom.shop">support@popcom.shop</a> if needed.<br/><br/>
                      <b>Account ID:</b> {{$account->account_id}}<br/>
                      <b>Account Name:</b> {{$account->account_name}}<br/>
                      <b>Machine Name:</b> {{$kiosk['kiosk_identifier']}}<br>
                      <b>Machine Address:</b> {{$kiosk['kiosk_street']}}, {{$kiosk['kiosk_city']}}, {{$kiosk['kiosks_state']}}, {{$kiosk['kiosk_zip']}}<br/>
                      <b>Error Type:</b> {{$monitorData['error_type']}}<br/>
                      <b>Error Message:</b> {{$monitorData['error_message']}}<br/>
                    </p>
                  </td>
                </tr>
                <tr>
                  <td class="content-cell" style="font-family:'-apple-system', BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol';padding: 0 20px 0 20px;">
                    <p style="color: #000;font-family:'-apple-system', BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol';font-size:15px;line-height:1.5em;margin-top:0;text-align:left;">The machine is having power or connectivity issues.
                    </p>
                  </td>
                </tr>

<!-- footer -->
        <tr>
          <td class="content-cell" style="font-family:'-apple-system', BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol';padding: 0 20px 0 20px;">

            <p style="color: #000;font-family:'-apple-system', BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol';font-size:15px;line-height:1.5em;margin-top:0;text-align:left;">
              <br/>Thank You,<br>
              <b>The PopCom Customer Success Team</b><br/>
              <div style="width:120px;float:left">
               <img src="{{ url('/image/popcom-logo.png') }}"  style="width:120px" alt=""/>
              </div>
              <div  style="width:45%;float:left;margin-left:10px">
                997 N. Fourth St.<br />
                Columbus OH 43201<br />
                <a href="https://www.popcom.shop" target="_blank">www.popcom.shop</a><br />
                 <span style="float:left;margin-top:10px">
                <a href="https://twitter.com/popcomtech" target="_blank"><img src="{{ url('/image/twitter.png') }}"  style="width:25px;height:25px" alt=""/></a>
                <a href="https://www.facebook.com/PopComTech/" target="_blank"><img src="{{ url('/image/facebook.png') }}"  style="width:25px;height:25px" alt=""/></a>
                <a href="https://www.linkedin.com/company/solutions-vending/" target="_blank"><img src="{{ url('/image/linkedin.png') }}"  style="width:25px;height:25px" alt=""/></a>
                <a href="https://www.instagram.com/popcomtech/?hl=en" target="_blank"><img src="{{ url('/image/instagram.png') }}"  style="width:25px;height:25px" alt=""/></a>
              </span>
              </div>
            </p>
          </td>
        </tr>
        <tr>
          <td class="content-cell" style="font-family:'-apple-system', BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol';padding: 0 20px 0 20px;">
            <p style="color: #000;font-family:'-apple-system', BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol';font-size:15px;line-height:1.5em;margin-top:0;text-align:left;">
              <b>This is an automated message sent from the PopCom SaaS Software</b>
            </p>  
          </td>
        </tr>
      </table>
    </td>
  </tr>
</table>
</body>
</html>
