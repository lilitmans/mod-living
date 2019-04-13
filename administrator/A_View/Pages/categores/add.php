<div id='content'>
    <form id='main_form_asd' action='' method='post'>
        <div class='box'>
            <div class='box_header'>
                <h3 class="box-title"><?= isset($params['result']['name']) ? 'Редактировать категории' : 'Добавить категории' ?></h3>
                <div class="box-tools">
                    <button type="button" class="minresize_box setsize"><i class="fa fa-minus"></i></button>
                </div>
            </div>
            <div class="box_edit select_b_ed box_ck">
                <div class="box_edit box_ck">
                    <div class="form_input">
                        <label>Name</label>
                        <div class="input_group">
                            <div class="input_img"><i class="fa fa-pencil"></i></div>
                            <input type="text" class="input_text" name='name' placeholder="Name" value='<?= isset($params['result']['name']) ? $params['result']['name'] : '' ?>'>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="form_input a_form_butt">
            <div class="input_group clen">
                <button class='save' for='main_form_asd'>Save</button>
            </div>
        </div>
    </form>
</div>