<div id='content'>

    <div id='table_div'>
        <div class="table_head_main">
            <div class="table_main_head clen">
                <div class='table_head'>
                    <h3></h3>
                </div>
                <div class='table_head_name'>
                    <h1>Users</h1>
                </div>
                <div class='table_head fnone'>
                    <div class="form_input">
                    </div>
                </div>
            </div>
        </div>

        <div class="ex_filtrs_col clen"></div>


        <table>
            <thead>
            <tr>
                <th class='table_num'>#</th>
                <th class='w_10'>Name</th>
                <th class='w_10'>Last Name</th>
                <th class='w_10'>Email</th>
                <th class='w_10'>Phone</th>
                <th class='w_10'>Work Phone</th>
                <th class='w_10'>Action</th>
            </tr>
            </thead>
            <tbody id="main_tbody" data-table=''>
            <?php
            $numbered = 0;

            if (isset($params['result'])) {

                foreach ($params['result'] as $val) {
                    $numbered++
                    ?>
                    <tr>
                        <td>
                            <span><?= $numbered ?></span>
                        </td>
                        <td>
                            <span class="table_imgae"><?= $val['f_name'] ?></span>
                        </td>
                        <td>
                            <span class="table_imgae"><?= $val['l_name'] ?></span>
                        </td>
                        <td>
                            <span class="table_imgae"><?= $val['email'] ?></span>
                        </td>
                        <td>
                            <span class="table_imgae"><?= $val['m_phone'] ?></span>
                        </td>
                        <td>
                            <span class="table_imgae"><?= $val['w_phone'] ?></span>
                        </td>
                        <td>
                            <div class="action_button">
                                <a href='<?= $baseurl ?>/users/<?=$val['id']?>'>
                                     <button>Information</button>
                                </a>
                            </div>
                        </td>
                    </tr>
                <?php }
            } ?>
            </tbody>
        </table>

    </div>
</div>