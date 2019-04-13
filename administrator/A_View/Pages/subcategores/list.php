<div id='content'>

    <div id='table_div'>
        <div class="table_head_main">
            <div class="table_main_head clen">
                <div class="group_page">
                    <div class="page_title">
                        <h1>Все Подкатегория</h1>
                    </div>
                    <div class="add_button">
                        <a href='<?= $baseurl ?>/subcategores/add'>
                            <button class="action_add_cat">Добавить Подкатегория</button>
                        </a>
                    </div>
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
                <th class='w_10'>Названия Подкатегория</th>
                <th class='w_10'></th>
            </tr>
            </thead>
            <tbody id="main_tbody" data-table=''>
            <?php
            $numbered = 0;

            if (isset($params['result'])) {
                foreach ($params['result'] as $val) {
                    $numbered++
                    ?>
                    <tr id="pare_<?=$val['id']?>">
                        <td>
                            <span><?= $numbered ?></span>
                        </td>
                        <td>
                            <span class="table_imgae"><?= $val['name'] ?></span>
                        </td>
                        <td>
                            <div class="grupe_button">
                                <div class="action_button">
                                    <a href='<?= $baseurl ?>/subcategores/edit/<?=$val['id']?>'>
                                        <button>Редактировать</button>
                                    </a>
                                </div>
                                <div class="remove_s">
                                    <button class='delete_m_cat' data-id='<?=$val['id']?>'>Удалять</button>
                                </div>
                            </div>
                        </td>
                    </tr>
                <?php }
            } ?>
            </tbody>
        </table>

    </div>
</div>
<script>
    $(document).ready(function () {
        $('.delete_m_cat').click(function() {
            var removeId = $(this).data("id");
            if(!confirm("Are you sure that want delete ? ?")){return false;}
            var url = base+"/subcategores/delete/";
            var body = "id="+removeId+"";
            requestPost(url,body,function(){
                if(this.readyState == 4){
                    var result = JSON.parse(this.responseText);
                    if(result.error){
                        $('#pare_'+removeId).fadeOut(function () {
                            $('#pare_'+removeId).remove();
                        });
                    }else{

                    }
                }
            })

        })
    })

</script><?php
/**
 * Created by PhpStorm.
 * User: Karen
 * Date: 4/13/2019
 * Time: 7:28 PM
 */