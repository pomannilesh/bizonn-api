<!DOCTYPE html>
<html>
<head>
    <title>Inventory running low</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="color-scheme" content="light">
    <meta name="supported-color-schemes" content="light">
    
    <style type="text/css">
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
            padding-left: 
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
    </style>

</head>
<body>
     
    <div class="wrap-table">
         
        <table class="table custom-review-tbl">
            <tr>
                <td colspan="3" style="box-sizing:border-box;font-family:'-apple-system',BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';font-size:15px;line-height:1.5em;margin-top:0;text-align:left;color:#000;"></td>
            </tr>
            <tr>
                <td colspan="3" style="box-sizing:border-box;font-family:'-apple-system',BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';font-size:15px;line-height:1.5em;margin-top:0;text-align:left;color:#000;">
                    <div style="padding-right: 25px;padding-left: 25px">
                        <table  style="border-style: none;" cellpadding="0px" cellspacing="0px" width="100%">
                            <tr>
                                <td colspan="4" style="box-sizing:border-box;font-family:'-apple-system',BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';font-size:15px;line-height:1.5em;margin-top:0;text-align:left;color:#000;">&nbsp;</td>
                            </tr>
                            <tr>
                                <td colspan="4" style="box-sizing:border-box;font-family:'-apple-system',BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';font-size:15px;line-height:1.5em;margin-top:0;text-align:left;color:#000;">&nbsp;</td>
                            </tr>
                            <tr>
                                <td colspan="3" style="box-sizing:border-box;font-family:'-apple-system',BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';font-size:15px;line-height:1.5em;margin-top:0;text-align:left;color:#000;">Dear {{ $data['org_name'] != '' ? $data['org_name'] : '' }},</td>
                                <td style="box-sizing:border-box;font-family:'-apple-system',BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';font-size:15px;line-height:1.5em;margin-top:0;text-align:left;color:#000;">&nbsp;</td>
                            </tr>
                            <tr>
                                <td colspan="3" style="box-sizing:border-box;font-family:'-apple-system',BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';font-size:15px;line-height:1.5em;margin-top:0;text-align:left;color:#000;">&nbsp;</td>
                                <td style="box-sizing:border-box;font-family:'-apple-system',BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';font-size:15px;line-height:1.5em;margin-top:0;text-align:left;color:#000;">&nbsp;</td>
                            </tr>
                            <tr>
                                <td colspan="3" style="box-sizing:border-box;font-family:'-apple-system',BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';font-size:15px;line-height:1.5em;margin-top:0;text-align:left;color:#000;">
                                    Inventory levels are low for at least one product for MACHINE: {{ $data['machine_name'] != '' ? $data['machine_name'] : '' }} 
                                </td>
                                <td style="box-sizing:border-box;font-family:'-apple-system',BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';font-size:15px;line-height:1.5em;margin-top:0;text-align:left;color:#000;">&nbsp;</td>
                            </tr>                    
                        </table>
                    </div>
                </td>
            </tr>               

            <tr>
                <td colspan="3" style="box-sizing:border-box;font-family:'-apple-system',BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';font-size:15px;line-height:1.5em;margin-top:0;text-align:left;color:#000;">
                    <div style="padding-right: 25px;padding-left: 25px">
                        Current inventory levels for {{ $data['machine_name'] != '' ? $data['machine_name'] : '' }}  as of {{ $data['utc_time'] != '' ? $data['utc_time'] : '' }}  are:                      
                    </div>
                </td>                
            </tr>

            <tr>                
                <td colspan="3" style="box-sizing:border-box;font-family:'-apple-system',BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';font-size:15px;line-height:1.5em;margin-top:0;text-align:left;color:#000;">&nbsp;</td>
            </tr>   

            <tr>
                <td colspan="3" style="box-sizing:border-box;font-family:'-apple-system',BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';font-size:15px;line-height:1.5em;margin-top:0;text-align:left;color:#000;">
                    <div style="padding-right: 25px;padding-left: 25px">
                        <table border="1" cellpadding="5px" cellspacing="0">
                            <tr>
                                <th>Bin Identification</th>
                                <th>Product</th>
                                <th>Inventory Level</th>
                            </tr>
                            @if ( !empty($data['low_product_list']) )
                                @php
                                    $keys = array_column($data['low_product_list'], 'bay_no');
                                    array_multisort($keys, SORT_ASC, $data['low_product_list']);
                                @endphp

                                @foreach ($data['low_product_list'] as $item)
                                <tr>
                                    <td>{{ $item['bay_no'] }}</td>
                                    <td>{{ $item['product_name'] }}</td>
                                    <td>{{ $item['level'] == 1 ? $item['quantity'] : $item['quantity'] }} </td>
                                </tr>
                                @endforeach
                                
                            @endif
                          
                        </table>
                    </div>                
                </td>
            </tr>

            <tr>                
                <td colspan="3" style="box-sizing:border-box;font-family:'-apple-system',BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';font-size:15px;line-height:1.5em;margin-top:0;text-align:left;color:#000;">&nbsp;</td>
            </tr>

            <tr>
                <td colspan="3" style="box-sizing:border-box;font-family:'-apple-system',BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';font-size:15px;line-height:1.5em;margin-top:0;text-align:left;color:#000;"><!-- Product -->
                    <div style="padding-right: 25px;padding-left: 25px">
                        Please login to your  <a href="<?php echo 'https://'.$_SERVER['HTTP_HOST']; ?>">PopCom</a> account to check your machine inventory levels, and update them once replenishment is complete.
                    </div>
                </td>                
            </tr>

            <tr>
                <td colspan="3" style="box-sizing:border-box;font-family:'-apple-system',BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';font-size:15px;line-height:1.5em;margin-top:0;text-align:left;color:#000;">&nbsp;</td>
            </tr>
            
            <tr>
                <td colspan="3" style="box-sizing:border-box;font-family:'-apple-system',BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';font-size:15px;line-height:1.5em;margin-top:0;text-align:left;color:#000;">
                    <div style="padding-right: 25px;padding-left: 25px">
                        <table style="border-style: none;" cellpadding="0px" cellspacing="0px" width="100%">
                            <tbody>
                                <tr>
                                    <td colspan="3" style="box-sizing:border-box;font-family:'-apple-system',BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';font-size:15px;line-height:1.5em;margin-top:0;text-align:left;color:#000;">Thank You,</td>
                                    <td style="box-sizing:border-box;font-family:'-apple-system',BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';font-size:15px;line-height:1.5em;margin-top:0;text-align:left;color:#000;">&nbsp;</td>
                                </tr>
                                                        
                                <tr>
                                    <td colspan="3" style="box-sizing:border-box;font-family:'-apple-system',BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';font-size:15px;line-height:1.5em;margin-top:0;text-align:left;color:#000;"><a><b>The PopCom Team</b></a></td>
                                    <td style="box-sizing:border-box;font-family:'-apple-system',BlinkMacSystemFont,'Segoe UI',Roboto,Helvetica,Arial,sans-serif,'Apple Color Emoji','Segoe UI Emoji','Segoe UI Symbol';font-size:15px;line-height:1.5em;margin-top:0;text-align:left;color:#000;">&nbsp;</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </td>
            </tr>

        </table>
    </div>
   
</body>
</html>