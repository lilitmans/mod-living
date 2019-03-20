<div id='content'>
    <form id='main_form_asd' action='<?=$baseurl?>/filtrname/<?= isset($params['result']['id']) ? $params['result']['id'] : '' ?>/' method='post'>
        <div class='box'>
            <div class='box_header'>
                <h3 class="box-title">Filtr name</h3>
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
                    <div class="clear"></div>
                    <div class="form_input">
                        <label>View type</label>
                        <div class="input_group">
                            <label class="filtr_name_lab" for="color">Color</label>
                            <input type="radio" id="color" name='view_type' required value='1' <?= isset($params['result']['view_type']) && $params['result']['view_type'] == '1' ? "checked" : '' ?>>
                        </div>
                        <div class="input_group">
                            <label class="filtr_name_lab" for="side">side by side</label>
                            <input type="radio" id="side" name='view_type' required value='2' <?= isset($params['result']['view_type']) && $params['result']['view_type'] == '2' ? "checked" : '' ?>>
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
    <form id='main_form' action='<?=$baseurl?>/<?=$params['own']['url']?>/update/<?= isset($params['result']['id']) ? $params['result']['id'] : '' ?>/' method='post' enctype="multipart/form-data">
        <div class='box'>
            <div class='box_header'>
                <h3 class="box-title">Filtrs</h3>
                <div class="box-tools">
                    <button type="button" class="minresize_box setsize"><i class="fa fa-minus"></i></button>
                </div>
            </div>
            <div class="box_edit box_ck">
                <div class="filtr_big_main_box">
                    <div id="filtr_big_add" class="filtr_big_box clen">
                        <?php if(count($params['all_filtr']) > 0){ ?>
                            <?php foreach ($params['all_filtr'] as $val){ ?>
                                <div id="m_<?=$val['id']?>" class="filtrs_nput_box clen">
                                    <div class='delete_m_filtr' data-id='<?=$val['id']?>'>
                                        <i class='fa fa-times' aria-hidden='true'></i>
                                    </div>
                                    <div class='sort_m_filtr' data-id='<?=$val['id']?>'>
                                        <i class="fa fa-sort" aria-hidden="true"></i>
                                    </div>
                                    <div class="form_input filtr_add">
                                        <label>Name </label>
                                        <div class="input_group">
                                            <div class="input_img"><i class="fa fa-pencil"></i></div>
                                            <input type="text" class="input_text" required name='filtr[<?=$val['id']?>][id][name]' placeholder="Name" value='<?= $val['name'] ?>'>
                                            <input type="hidden" class="input_text" required name='filtr[<?=$val['id']?>][id][id]' value='<?= $val['id'] ?>'>
                                        </div>
                                    </div>
                                    <?php if($params['result']['view_type'] == 1){ ?>
                                        <div class="form_input filtr_add">
                                            <label>Color</label>
                                            <div class="input_group">
                                                <input type="color" class="color_input" name='filtr[<?=$val['id']?>][id][color]' value='#<?= $val['name'] ?>'>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            <?php } ?>
                        <?php }else{ ?>
                            <div class="filtrs_nput_box clen">
                                <div class='delete_m_filtr' data-id=''>
                                    <i class='fa fa-times' aria-hidden='true'></i>
                                </div>
                                <div class="form_input filtr_add">
                                    <label>Name </label>
                                    <div class="input_group">
                                        <div class="input_img"><i class="fa fa-pencil"></i></div>
                                        <input type="text" class="input_text" required name='filtr[1][name]' placeholder="Name">
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                    <div id="_add_col" class='save add_col '>Add colum</div>
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
<script>
    $(document).ready(function () {
        var newAppend = false;
        $('#filtr_big_add').sortable({
            axis: "y",
            handle: '.sort_m_filtr',
            update: function () {
                if(newAppend){
                    alert("У вас есть несохраненные данные. После сохранение вы можете отсортироват");
                    return false;
                }
                ords = $(this).sortable("toArray");
                console.log($(this).sortable("toArray"))
                var url = base+"/filtrs/sort/";
                var body = "ords="+ords+"";
                requestPost(url,body,function(){
                    if(this.readyState == 4){
                        var result = JSON.parse(this.responseText);
                        if(result.error){
                            //self.parent('td').parent('tr').fadeOut();
                        }else{
                            console.log(result.error)
                        }
                    }
                })
            }
        });


        var savegen = new Date().getTime();
        $("#_add_col").click(function () {
            //var boxSizeCount = $(".filtrs_nput_box").length+1;
            var boxSizeCount = Math.round(Math.random() * (savegen+50));
            savegen = boxSizeCount;
            var inputBox = "";
            inputBox += "<div class='filtrs_nput_box clen'>"+
                            "<div class='delete_m_filtr' data-id='0'>"+
                                "<i class='fa fa-times' aria-hidden='true'></i>"+
                            "</div>"+
                            "<div class='form_input filtr_add'>"+
                                "<label>Name </label>"+
                                "<div class='input_group'>"+
                                    "<div class='input_img'><i class='fa fa-pencil'></i></div>"+
                                    "<input type='text' class='input_text' required name='filtr["+boxSizeCount+"][name]' placeholder='Name'>"+
                                "</div>"+
                            "</div>"+
                            <?php if($params['result']['view_type'] == 1){ ?>
                            "<div class='form_input filtr_add'>"+
                            "<label>Color</label>"+
                            "<div class='input_group'>"+
                            "<input type='color' class='color_input' name='filtr["+boxSizeCount+"][color]'>"+
                            "</div>"+
                            "</div>"+
                            <?php } ?>
                        "</div>";
            $("#filtr_big_add").append(inputBox);
            newAppend = true;
        });

        $(document).on("click",".delete_m_filtr",function() {

            var boxSizeCountDel = $(".filtrs_nput_box").length;
            if(boxSizeCountDel == 1){
                return false;
            }
            var removeId = $(this).data("id");
            var parentBox = $(this).parent(".filtrs_nput_box");
            if(removeId == '0'){
                $(this).parent(".filtrs_nput_box").fadeOut(function () {
                    parentBox.remove();
                })
            }else{
                if(!confirm("Are you sure that want delete ? ?")){return false;}
                var url = base+"/filtrs/delete/";
                var body = "id="+removeId+"";
                requestPost(url,body,function(){
                    if(this.readyState == 4){
                        var result = JSON.parse(this.responseText);
                        if(result.error){
                            parentBox.fadeOut(function () {
                                parentBox.remove();
                            });
                        }else{

                        }
                    }
                })
            }
        })
    })
</script>