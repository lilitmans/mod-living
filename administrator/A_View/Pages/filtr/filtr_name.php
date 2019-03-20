<div id='content'>
    <form id='main_form' action='<?=$baseurl?>/<?=$params['own']['url']?>/<?= isset($params['update']) && is_numeric($params['update']) ? $params['update']."/" : 'add/' ?>' method='post' enctype="multipart/form-data">
        <div class='box'>
            <div class='box_header'>
                <h3 class="box-title">Add filtr name</h3>
                <div class="box-tools">
                    <button type="button" class="minresize_box setsize"><i class="fa fa-minus"></i></button>
                </div>
            </div>
            <div class="box_edit box_ck">
                <div class="box_edit box_ck">
                    <div class="form_input">
                        <label>Name</label>
                        <div class="input_group">
                            <div class="input_img"><i class="fa fa-pencil"></i></div>
                            <input type="text" class="input_text" name='name' required placeholder="Name" value='<?= isset($params['result']['name']) ? $params['result']['name'] : '' ?>'>
                        </div>
                    </div>
                    <div class="clear"></div>
                    <div class="form_input">
                        <label>View type</label>
                        <div class="input_group">
                            <label class="filtr_name_lab" for="color">None</label>
                            <input type="radio" id="color" name='view_type' required value='0' <?= isset($params['result']['view_type']) && $params['result']['view_type'] == '0' ? "checked" : '' ?>>
                        </div>
                        <div class="input_group">
                            <label class="filtr_name_lab" for="color">Color</label>
                            <input type="radio" id="color" name='view_type' required value='1' <?= isset($params['result']['view_type']) && $params['result']['view_type'] == '1' ? "checked" : '' ?>>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="form_input a_form_butt">
            <div class="input_group clen">
                <button class='save' for='main_form'>Save</button>
            </div>
        </div>
    </form>
</div>