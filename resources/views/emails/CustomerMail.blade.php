<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width"> <!-- Forcing initial-scale shouldn't be necessary -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- Use the latest (edge) version of IE rendering engine -->
        <meta name="x-apple-disable-message-reformatting">  <!-- Disable auto-scale in iOS 10 Mail entirely -->

        <title>Customer Receipt</title>
        <style type="text/css">
           html,
            body {
                margin: 0 auto !important;
                padding: 0 !important;
                height: 100% !important;
                width: 100% !important;
            }

            /* What it does: Stops email clients resizing small text. */
            * {
                -ms-text-size-adjust: 100%;
                -webkit-text-size-adjust: 100%;
            }

            .row {
                margin-right: -15px;
                margin-left: -15px;
            }
            .custom-review-tbl>tbody>tr>td{
                border-top: none;
            }
            .custom-border{
                border: 1px solid black;
            }
            .custom-text-align{
                margin-right: 28px !important;
            }
            #custom_text_1_para{
                text-align: left;
            }
            table {
                width: 100%;
                /*border-collapse: collapse;*/
                border: 1px solid #cec3c3;
            }
            .company-logo_image {
                max-height: 120px;
                max-width: 200px;
                width: auto;
                height: auto;
                object-fit: contain;
            }
            .wrap-table{
                /* padding-left:  */
            }
            .button {
                border-radius: 4px;
                border: 0;
                padding: 10px 30px;
                text-decoration: none;
                font-size: 0.875em;
                font-weight: 600;
                background-color: #cccccc;
                transition: background-color 0.3s ease-in;
                cursor: pointer;
            }
            .head_para{
                margin-top: 10px;
                border:1px solid #d4d4d4;
            } 
            tr td {
                font-size: 1em;
            } 
            .servey_link_btn{
                line-height: 29px;
                padding: 0px 30px;
                font-size: 16px;
                border-radius: 4px;
                border: 0;
                text-decoration: none;
                cursor: pointer;
            }   
        </style>
    </head>
<body>
    @php
    $logo_image             = $order['account_logo'];
    $org_name               = $order['account_org_name'];
    $email_custom_text_1    = $order['receipt_custom_text_1'];
    $email_custom_text_2    = $order['receipt_custom_text_2'];
    $primary_color          = $order['primany_color'];
    $include_servey_url     = $order['include_survey_url'];
    $email_servey_url       = $order['receipt_survey_url'];
    
    $parent_name                = $order['parent_name'];
    $parent_include_servey_url  = $order['parent_include_servey_url'];
    $parent_email_servey_url    = $order['parent_email_servey_url'];
    $parent_email_custom_text_1 = $order['parent_email_custom_text_1'];
    
    @endphp

    <div class="wrap-table">
        <table class="table custom-review-tbl" style="width: 800px">
            <tr>
                <td colspan="3" style="box-sizing:border-box;font-family:'-apple-system',BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';font-size:15px;line-height:1.5em;margin-top:0;text-align:left;color:#000;">
                    <div style="padding-right: 25px;padding-left: 25px">
                        <table  style="border-style: none; margin: 0px auto;padding-top: 20px;
                        padding-bottom: 10px;" cellpadding="0px" cellspacing="0px" width="100%">
                            <tr style="background-color: rgb(242, 242, 242);">
                                <td colspan="3">
                                    <img id="preview" src="<?php echo $logo_image; ?>" alt="" style="height: 60px;padding-left: 5px;" class="company-logo_image">
                                </td>
                            
                                <td style="text-align: right;">
                                    <p  style="padding-right: 15px">Order No: # {{ $order['order_id'] }}</p>
                                    @if ($order['order_transaction_ref'] != '')
                                    <p style="padding-right: 15px">{{ $order['order_transaction_ref'] }}</p>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td colspan="4" style="padding: 0px; height: 5px;">&nbsp;</td>                            
                            </tr>
                            <tr>
                                <td colspan="3" style="box-sizing:border-box;font-family:'-apple-system',BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';font-size:15px;line-height:1.5em;margin-top:0;text-align:left;color:#000;">Hi {{ $order['customer_email'] }},</td>
                                <td style="box-sizing:border-box;font-family:'-apple-system',BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';font-size:15px;line-height:1.5em;margin-top:0;text-align:left;color:#000;">&nbsp;</td>
                            </tr>
                            <tr>
                                <td colspan="3" style="box-sizing:border-box;font-family:'-apple-system',BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';font-size:15px;line-height:1.5em;margin-top:0;text-align:left;color:#000;">{{ nl2br($email_custom_text_1) }}</td>
                                <td style="box-sizing:border-box;font-family:'-apple-system',BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';font-size:15px;line-height:1.5em;margin-top:0;text-align:left;color:#000;">&nbsp;</td>
                            </tr>
                            
                            @if (!empty($include_servey_url) && $include_servey_url == 'Y')
                            <tr>
                                <td colspan="3" style="box-sizing:border-box;font-family:'-apple-system',BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';font-size:15px;line-height:1.5em;margin-top:0;text-align:left;color:#000;">
                                    <a href="{{ !empty($email_servey_url) ? $email_servey_url : 'javascript:void(0)' }}" target="_blank"><button type="button" class="button button--large servey_link_btn" style="background-color: {{ isset($primary_color) ? '#'.$primary_color : '' }};color: white;line-height: 29px;padding: 0px 30px;font-size: 16px;border-radius: 4px;border: 0;text-decoration: none;cursor: pointer;font-weight: bold;float:left">Take a Survey</button> </a>
                                </td>                            
                                <td style="box-sizing:border-box;font-family:'-apple-system',BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';font-size:15px;line-height:1.5em;margin-top:0;text-align:left;color:#000;">&nbsp;</td>
                            </tr>  
                            @endif            

                            <tr>
                                <td colspan="3" style="box-sizing:border-box;font-family:'-apple-system',BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';font-size:15px;line-height:1.5em;margin-top:0;text-align:left;color:#000;">Your purchase details are as follows</td>
                                <td style="box-sizing:border-box;font-family:'-apple-system',BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';font-size:15px;line-height:1.5em;margin-top:0;text-align:left;color:#000;">&nbsp;</td>
                            </tr>                  
                            <tr>
                                <td colspan="3" style="box-sizing:border-box;font-family:'-apple-system',BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';font-size:15px;line-height:1.5em;margin-top:0;text-align:left;color:#000;">Location: {{ ($order['kiosk_street']) ? $order['kiosk_street'].', ' : '' }} {{ ($order['kiosk_city']) ? $order['kiosk_city'].', ' : '' }}  {{ ($order['kiosks_state']) ? $order['kiosks_state'].', ' : '' }}  {{ ($order['kiosk_country']) ? $order['kiosk_country'].', ' : '' }}  {{ ($order['kiosk_zip']) ? $order['kiosk_zip'] : '' }}  </td>
                                <td style="box-sizing:border-box;font-family:'-apple-system',BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';font-size:15px;line-height:1.5em;margin-top:0;text-align:left;color:#000;">&nbsp;</td>
                            </tr>
                            
                        </table>
                    </div>
                </td>
            </tr>

            <tr>                
                <td colspan="3" style="box-sizing:border-box;font-family:'-apple-system',BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';font-size:15px;line-height:1.5em;margin-top:0;text-align:left;color:#000;">
                    <div style="padding-right: 25px;padding-left: 25px">
                        <table border="1"  cellpadding="0px" cellspacing="0px" width="100%" style="margin: 0px auto;">
                            <tr style="text-align: center;">
                                <td>Product Name</td>
                                <td>Product Variant</td>
                                <td>Product Price</td>
                                <td>Qty Ordered</td>
                                <td>Line Total</td>
                            </tr>
                            <tr style="text-align: center;" >
                                <td>
                                   <div>{{ $order['product_name'] }}</div>
                                </td>
                                <td> 
                                    <div>{{ $order['variant_name'] }}</div>
                                </td>
                                <td>$ {{ number_format((float)$order['variant_price'], 2, '.', '') }}</td>
                                <td>{{ $order['product_qty'] }}</td>
                                <td>$ {{ number_format((float)$order['variant_price'] * $order['product_qty'], 2, '.', '') }}</td>
                            </tr>
                        </table>
                    </div>
                </td>             
            </tr>
            
            <tr>            
                <td colspan="3" style="box-sizing:border-box;font-family:'-apple-system',BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';font-size:15px;line-height:1.5em;margin-top:0;text-align:left;color:#000;">
                    <div style="padding-right: 25px;padding-left: 25px;text-align: right;">
                        <p>  
                            <div  style="padding-right: 15px">
                                <span style="display: inline;">Sub Total:</span>
                                <span style="display: inline;">$ {{ number_format((float)$order['order_subtotal'], 2, '.', '') }}</span>
                            </div>
                        </p>                            
                        <p>
                            <div style="padding-right: 15px">
                                <span style="display: inline;">Discount Amount {{ ($order['promo_code']) ? '(Code: '.$order['promo_code'].')' : '' }}:</span>
                                <span style="display: inline;">$ {{ number_format((float)$order['order_discount_value'], 2, '.', '') }}</span>
                            </div>
                        </p>
                        <p>
                            <div style="padding-right: 15px">
                                <span style="display: inline;">Tax: {{ ($order['kiosk_tax_rate']) ? '('.number_format((float)$order['kiosk_tax_rate'], 2, '.', '').' %)' : '0.00%' }}:</span>
                                <span style="display: inline;">$ {{ ($order['order_tax']) ? number_format((float)$order['order_tax'], 2, '.', '0.00') : '00.00' }}</span>
                            </div>
                        </p>
                        <p>
                            <div  style="padding-right: 15px"> 
                                <span style="display: inline;">Total:</span>
                                <span style="display: inline;"> $ {{ number_format((float)$order['order_total'], 2, '.', '') }}</span>
                            </div>
                        </p>
                    </div>
              
                </td>
            </tr>
           
           <tr>          
                <td colspan="3" style="box-sizing:border-box;font-family:'-apple-system',BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';font-size:15px;line-height:1.5em;margin-top:0;text-align:left;color:#000;">
                    <div style="padding-right: 25px;padding-left: 25px">
                        <table border="0px" cellpadding="0px" cellspacing="0px" width="100%" style="border: 0px;margin: 0px auto;">
                            <tbody>
                                <tr>
                                    <td colspan="3">
                                        <p> {{ $email_custom_text_2 }} </p>
                                    </td>                            
                                </tr>
                                @if ($parent_email_custom_text_1 != '')
                                <tr>
                                    <td colspan="3">
                                        <p>{{ $parent_email_custom_text_1 }}</p>
                                    </td>                    
                                </tr>
                                @endif  
                                @if ($parent_email_servey_url != '' && $parent_include_servey_url == 'Y')
                                <tr>
                                    <td colspan="3">
                                        <a href="{{ !empty($parent_email_servey_url) ? $parent_email_servey_url : 'javascript:void(0)' }}" target="_blank" id="servey_link" style="text-decoration: underline !important;">Take the {{$parent_name}} Survey</a>
                                    </td>                                            
                                </tr>            
                                @endif                             
                            </tbody>
                        </table>
                    </div>
                </td>
            </tr>
        </table>
    </div>
</body>
</html>