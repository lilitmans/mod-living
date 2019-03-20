
<div id='content'>

    <div id='table_div'>
        <div class="table_head_main">
            <div class="table_main_head clen">
                <div class='table_head'>
                    <h3></h3>
                </div>
                <div class='table_head_name'>
                    <h1>User <?=$params['result'][0]['f_name']?> <?=$params['result'][0]['l_name']?></h1>
                </div>
                <div class='table_head fnone'>
                    <div class="form_input">
                    </div>
                </div>
            </div>
        </div>

        <div class="ex_filtrs_col clen"></div>
        <div class="user_information">
        <table border="1">
            <tr>
                <td>Name</td>
                <td><?=$params['result'][0]['user_t']?> <?=$params['result'][0]['f_name']?></td>
            </tr>
            <tr>
                <td>LastName</td>
                <td><?=$params['result'][0]['l_name']?></td>
            </tr>
            <tr>
                <td>E-Mail</td>
                <td><?=$params['result'][0]['email']?></td>
            </tr>
            <tr>
                <td>Work phone</td>
                <td><?=$params['result'][0]['w_phone']?></td>
            </tr>
            <tr>
                <td>Mobile</td>
                <td><?=$params['result'][0]['m_phone']?></td>
            </tr>
            <tr>
                <td>Company</td>
                <td><?=$params['result'][0]['company']?></td>
            </tr>
            <tr>
                <td>Specialty</td>
                <td><?=$params['result'][0]['specialty']?></td>
            </tr>
            <tr>
                <td>Country</td>
                <td><?=$params['result'][0]['c_name']?></td>
            </tr>
            <tr>
                <td>City</td>
                <td><?=$params['result'][0]['city']?></td>
            </tr>
            <tr>
                <td>Street</td>
                <td><?=$params['result'][0]['street']?> <?=$params['result'][0]['number']?></td>
            </tr>
            <tr>
                <td>Postal code</td>
                <td><?=$params['result'][0]['postal_code']?></td>
            </tr>
            <tr>
                <td>Dinner</td>
                <td><?=$params['result'][0]['d_title']?> <?=$params['result'][0]['d_description'] ==  null ?'':$params['result'][0]['d_description']?> price <?=$params['result'][0]['d_price']?>€</td>
            </tr>
            <tr>
                <td>plans</td>
                <td><?=$params['result'][0]['title']?>, <?=$params['result'][0]['description']?> price <?=$params['result'][0]['price']?>€</td>
            </tr>
            <tr>
                <td>PO BOX</td>
                <td><?=$params['result'][0]['po_box']?> </td>
            </tr>
        </table>
            <div class='table_head_name'>
            <h2>Paymant information</h2>
            </div>
            <?php foreach($params['paymant'] as $value){?>
                <table border="1" style="margin-top: 15px">
                    <?php foreach($value as $key=>$val){ ?>
                        <tr>
                            <td><?=$key?></td>
                            <td><?=$val?></td>
                        </tr>
                    <?php }?>
                </table>
            <?php }?>
        </div>




    </div>
</div>
