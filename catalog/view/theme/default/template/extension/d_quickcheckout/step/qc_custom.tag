<qc_custom>
    <div class="step">

        <qc_custom_setting if={riot.util.tags.selectTags().search('"qc_custom_setting"') && getState().edit} step="{opts.step}"></qc_custom_setting>

        <qc_pro_label if={ riot.util.tags.selectTags().search('"qc_custom_setting"') < 0 && getState().edit}></qc_pro_label>

        <!-- Step -->
        <div class="panel panel-default" show={ getConfig().custom.display == 1 }>
             <div class="panel-heading">
                <h4 class="panel-title">
                    <span class="icon">
                        <i class="{ getConfig().custom.icon }"></i>
                    </span>
                    { getLanguage().custom.heading_title }
                </h4>
                <h5 if={getLanguage().custom.text_description}>{  getLanguage().custom.text_description } </h5>
            </div>

            <div class="panel-body">
                <div class="row">
                    <form  id="custom_fields" class="custom-fields" >
                        <div 
                            each={ field_id in fields }
                            if={ (getConfig().custom.fields[field_id])}
                            class="qc-field { (getConfig().custom.fields[field_id].style == 'col') ? 'qc-col' : 'qc-clearboth' }"
                            sort_order={ getConfig().custom.fields[field_id].sort_order }
                            field_id={field_id}
                            step="custom"
                            no-reorder
                            field={ getConfig().custom.fields[field_id] }
                            value={ getSession().custom[field_id] }
                            error={ getError().custom && getError().custom[field_id]}
                            data-is={ getConfig().custom.fields[field_id].type ? 'qc_field_' + getConfig().custom.fields[field_id].type : ''}
                        ></div>
                    </form>
                </div>
                <qc_custom_field if={getState().edit} setting_id="custom_custom_field_{rand()}" step="custom" location_account="true"></qc_custom_field>
            </div>
        </div>

        <!-- Hidden Step -->
        <div show={(getConfig().custom.display != 1 && getState().edit)}>
            <div class="panel panel-default" style="opacity: 0.5">
                <div class="panel-heading"> 
                    { getLanguage().custom.heading_title } 
                    <div class="pull-right"><span class="label label-warning">{getLanguage().general.text_hidden}<span></div>
                </div>
            </div>
        </div>
    </div>

    <script>
        this.mixin({store:d_quickcheckout_store});

        var tag = this;

        tag.fields = this.store.getFieldIds('custom');

        this.on('mount', function(){
            this.store.initFieldSortable('custom');
        $( document ).ready(function() {

        if($("#payment_address_shipping_address").attr("checked") != "checked"){
                $("#payment_address_shipping_address").click();
        }
        if($("#payment_address_agree").attr("checked") != "checked"){
                $("#payment_address_agree").click();
        }
        setTimeout(function(){
        if($("#custom_agree").attr("checked") != "checked"){
                $("#custom_agree").click();
        }
        }, 3000);
       // setTimeout(function(){
       // if($("#payment_address_postcode").val() == ""){
       //         $("#payment_address_postcode").val(12345);
       // }
       // }, 3000);


       // $($(".qc-field")[0]).addClass("qc-clearboth");
       // $($(".qc-field")[0]).removeClass("qc-col");
      //  $("#payment_address_lastname").val("abcdefg");
        $($(".qc-field")[13]).addClass("qc-clearboth");
        $($(".qc-field")[13]).removeClass("qc-col");
       // $("#payment_address_postcode").val(12345);
        $($($(".dropdown-menu")[5]).find("a")[171]).click();
        $($($(".dropdown-menu")[6]).find("a")[6]).click();
        //$($(".qc-field")[1]).css("display", "none");
        $($(".qc-field")[8]).css("display","none");
        $($(".qc-field")[9]).css("display","none");
        $($(".qc-field")[10]).css("display","none");
        $($(".qc-field")[12]).css("display","none");
      //  $($(".qc-field")[14]).css("display","none");
        $($(".qc-field")[15]).css("display","none");
        $($(".qc-field")[16]).css("display","none");
        $(".qc-checkbox").css("display","none");
        $("#child4").css("display","none");

	})

        })
    </script>
</qc_custom>
