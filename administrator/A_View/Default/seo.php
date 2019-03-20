<div class='box'>
    <div class='box_header'>
        <h3 class="box-title">SEO instrument</h3>
        <div class="box-tools">
            <button type="button" class="minresize_box setsize"><i class="fa fa-minus"></i></button>
        </div>
    </div>
    <div class='box_edit box_ck'>
        <div class="form_input foreng">
            <div class="form_input">
                <label>Heading (title)</label>
                <div class="input_group">
                    <div class="input_img"><i class="fa fa-external-link"></i></div>
                    <input type="text" class="input_text" name='title_eng' placeholder="Seo title" value='<?= isset($params['result']['title_eng']) ? $params['result']['title_eng'] : '' ?>' >
                </div>
            </div>
            <div class="form_input">
                <label>Description (description)</label>
                <div class="input_group">
                    <div class="input_img"><i class="fa fa-external-link"></i></div>
                    <input type="text" class="input_text" name='desc_eng' placeholder="Seo description" value="<?= isset($params['result']['desc_eng']) ? $params['result']['desc_eng'] : '' ?>">
                </div>
            </div>
            <div class="form_input">
                <label>Keywords (Keywords)</label>
                <div class="input_group">
                    <div class="input_img"><i class="fa fa-external-link"></i></div>
                    <input type="text" class="input_text" name='key_eng' placeholder="Seo keywords" value='<?= isset($params['result']['key_eng']) ? $params['result']['key_eng'] : '' ?>'>
                </div>
            </div>
        </div>
        <div class="form_input forrus">
            <div class="form_input">
                <label>Заголовок (title)</label>
                <div class="input_group">
                    <div class="input_img"><i class="fa fa-external-link"></i></div>
                    <input type="text" class="input_text" name='title_ru' placeholder="Seo title" value='<?= isset($params['result']['title_ru']) ? $params['result']['title_ru'] : '' ?>' >
                </div>
            </div>
            <div class="form_input">
                <label>Описание (description)</label>
                <div class="input_group">
                    <div class="input_img"><i class="fa fa-external-link"></i></div>
                    <input type="text" class="input_text" name='desc_ru' placeholder="Seo description" value="<?= isset($params['result']['desc_ru']) ? $params['result']['desc_ru'] : '' ?>">
                </div>
            </div>
            <div class="form_input">
                <label>Ключевые слова (Keywords)</label>
                <div class="input_group">
                    <div class="input_img"><i class="fa fa-external-link"></i></div>
                    <input type="text" class="input_text" name='key_ru' placeholder="Seo keywords" value='<?= isset($params['result']['key_ru']) ? $params['result']['key_ru'] : '' ?>'>
                </div>
            </div>
        </div>
        <div class="form_input forarm">
            <div class="form_input">
                <label>Վերնագիր (title)</label>
                <div class="input_group">
                    <div class="input_img"><i class="fa fa-external-link"></i></div>
                    <input type="text" class="input_text" name='title_arm' placeholder="Seo title" value='<?= isset($params['result']['title_arm']) ? $params['result']['title_arm'] : '' ?>' >
                </div>
            </div>
            <div class="form_input">
                <label>Նկարագրություն (description)</label>
                <div class="input_group">
                    <div class="input_img"><i class="fa fa-external-link"></i></div>
                    <input type="text" class="input_text" name='desc_arm' placeholder="Seo description" value="<?= isset($params['result']['desc_arm']) ? $params['result']['desc_arm'] : '' ?>">
                </div>
            </div>
            <div class="form_input">
                <label>Հիմնաբառեր (Keywords)</label>
                <div class="input_group">
                    <div class="input_img"><i class="fa fa-external-link"></i></div>
                    <input type="text" class="input_text" name='key_arm' placeholder="Seo keywords" value='<?= isset($params['result']['key_arm']) ? $params['result']['key_arm'] : '' ?>'>
                </div>
            </div>
        </div>
    </div>
</div>