var icon=Array({"selectDefaultIcon"      :["icon-collapse"],
                "checkboxDefaultIcon"    :["icon-check-empty","icon-check"],
                "minusPlus"              :["icon-plus","icon-minus"],
                "radioDefaultIcon"       :["icon-circle-blank","icon-bullseye"],
                "uploadFileDefaultIcon"  :["icon-save"],
                "multiple"               :["icon-list"]});

var myCustomerInputs={
    init:function()
    {
      $('select.form-control').each(function(i,val)
        {
           if (!$(this).hasClass('form-control-active'))
                {
                   switch (val.type)
                    {
                      case 'select-multiple':
                        {
                          myCustomerInputs.myControl($(this),i,icon[0].selectDefaultIcon);
                          break;
                        }
                      default:
                        {
                          myCustomerInputs.myControl($(this),i,icon[0].selectDefaultIcon);
                        }

                    }
                    if (val.getAttribute('noSelected')!=null)
                    {
                      val.selectedIndex=-1;
                    }
                    myCustomerInputs.changeSelect(val);
                }
        });
        $("input").each(function(i,val)
        {
          if(( val.type==='checkbox') || ( val.type==='radio'))
          { 
           if (!$(this).hasClass('form-control-active'))
                {
                    $(this).css({'display':'inline-block','margin':'0','opacity':'0','position':'absolute','border':'none','left':'0','min-width':'100%','min-height':'100%'});
                    $(this).addClass('form-control-active');
                    $("<span class='input_"+val.type+"_customer_style_"+i+" form-control-active'></span>").insertBefore($(this));                   
                    $("span.input_"+val.type+"_customer_style_"+i).append("<i></i>");
                    $(this).appendTo("span.input_"+val.type+"_customer_style_"+i+">i");
                    myCustomerInputs.change(val);
                }
          }
          else if (( val.type==='file'))
                {
                     myCustomerInputs.myControl($(this),i,icon[0].uploadFileDefaultIcon); 
                     myCustomerInputs.changeFile(val);  
                } 
        });
     },
     changeFile:function(target)
        {
          $("input[name='"+target.name+"']").siblings('span.select_customer_style_selected').html($("input[name='"+target.name+"']").val());   
        },
     changeSelect:function(target)
        {

                switch (target.selectedIndex)
                  {
                      case -1:
                      {
                        $("select[name='"+target.name+"']").siblings('span.select_customer_style_selected').html('---');
                        break;
                      }
                      default:
                      {
                        $("select[name='"+target.name+"']").siblings('span.select_customer_style_selected').html(target.options[target.selectedIndex].text);       
                      }
                  }
                
         },
     change:function(target)
        {
                var isChecked=target.checked?1:0;
                switch (target.type)
                    {
                        case 'checkbox':
                          {
                            switch (target.getAttribute('icon'))
                              {
                                case 'minusPlus':
                                {
                                   $(target).parent().addClass(icon[0].minusPlus[isChecked]);
                                   $(target).parent().removeClass(icon[0].minusPlus[1-isChecked]);  
                                   break; 
                                }
                                default:
                                  {
                                    $(target).parent().addClass(icon[0].checkboxDefaultIcon[isChecked]);
                                    $(target).parent().removeClass(icon[0].checkboxDefaultIcon[1-isChecked]);  
                                  }
                             }
                            break;
                          }
                        case 'radio':
                          {
                            $(target).parent().addClass(icon[0].radioDefaultIcon[isChecked]);
                            $(target).parent().removeClass(icon[0].radioDefaultIcon[1-isChecked]);
                            break;
                          }
                        case 'file':
                          {
                            myCustomerInputs.changeFile(target);
                            break;
                          }
                        case 'button':
                          {
                            switch ($(target).hasClass('toggle-on'))
                             {
                                case false:
                                  {
                                    $(target).addClass('toggle-on');
                                    break;
                                  }
                                default:
                                  {
                                     $(target).removeClass('toggle-on');
                                  }  
                             }
                        }
                    }
       },
       group:function(target)
       {
            if (target.name)
            {
                $("input[type='"+target.type+"'][name='"+target.name+"']").each(function(i,val)
                    {
                       myCustomerInputs.change(val);  
                    });
            }
            else
                {
                    myCustomerInputs.change(target);       
                }
       },
       myControl:function(target,iteration,icon)
       {
         target.css({'position':'absolute','border':'none','left':'0'});  
         switch (target.prop('type'))
            {
               case 'select-one' :
               {
                  target.css({'opacity':'0'});
                  break;
               }
               case 'select-multiple' :
               {
                  target.css({'opacity':'1','padding':'5px 0px' });
                  break;
               }
               case 'file' :
               {
                  target.css({'opacity':'0'});
                  break;
               }
            }
          target.addClass('form-control-active');
          $("<span class='select_customer_style select_customer_style_"+iteration+"'></span>").insertBefore(target);
          target.appendTo("span.select_customer_style_"+iteration);
          target.parent().append("<span class='select_customer_style_selected'></span>");
          target.parent().append("<i class='"+icon+"'></i>");
          $('span.select_customer_style_'+iteration).css('display',target.css('display'));
            if (target.hasClass('no-autowidth'))
              {
                 $('span.select_customer_style_'+iteration).css('width',target.css('width'));
              }
           $('span.select_customer_style_'+iteration).css('color',target.css('color'));  
       }

}//end function
$(document).ready(function(){
myCustomerInputs.init();
$(document).on('change','input',function(e)
    {
      e.preventDefault();
      myCustomerInputs.group(e.target);

    })
$(document).on('change','select',function(e)
    {
        e.preventDefault();
        myCustomerInputs.changeSelect(e.target);                        
    }) ;
$(document).on('click',"input.toggle",function(e)
    {
      e.preventDefault();
      myCustomerInputs.change(e.target);
    })                            
});