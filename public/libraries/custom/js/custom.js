function select_menu(e){var t="#"+e;$(t).hasClass("collapsed")&&$(t).removeClass("collapsed")}function createDatatable(e,t,a){return $("#datatable").DataTable({responsive:!0,columns:t,searchDelay:2e3,autoWidth:!1,order:[[0,"DESC"]],columnDefs:[{responsivePriority:1,targets:-1},{searchable:!1,targets:a},{orderable:!1,targets:a}],deferRender:!0,language:{paginate:{first:"<<",previous:"<",next:">",last:">>"},sLengthMenu:"Mostrar _MENU_ registros",sInfo:"Mostrando _START_ al _END_ de _TOTAL_ elementos",sInfoEmpty:"No hay datos para mostrar",sEmptyTable:"No hay datos para mostrar",sInfoFiltered:"(filtrado de _MAX_ elementos en total)",sSearch:"Buscar:",sZeroRecords:"No se encontraron resultados"},processing:!0,serverSide:!0,ajax:e})}function createDelete(e){let t=Swal.mixin({customClass:{confirmButton:"btn btn-danger",cancelButton:"btn btn-secondary"},buttonsStyling:!1});t.fire({title:"CONFIRMACI\xd3N",text:"Esta acci\xf3n no se podr\xe1 deshacer. Seguro que desea eliminar este elemento?",type:"error",showCancelButton:!0,focusConfirm:!1,cancelButtonText:"No, cancelar!",confirmButtonText:"Si, eliminar!",showLoaderOnConfirm:!0,preConfirm:function(){e.submit()}})}function createCerrar(e){let t=Swal.mixin({customClass:{confirmButton:"btn btn-success",cancelButton:"btn btn-secondary"},buttonsStyling:!1});t.fire({title:"CONFIRMACI\xd3N",text:"Desea cerrar este elemento?",type:"success",showCancelButton:!0,focusConfirm:!1,cancelButtonText:"No, cancelar!",confirmButtonText:"Si, cerrar!",showLoaderOnConfirm:!0,preConfirm:function(){e.submit()}})}function createReabrir(e){let t=Swal.mixin({customClass:{confirmButton:"btn btn-warning",cancelButton:"btn btn-secondary"},buttonsStyling:!1});t.fire({title:"CONFIRMACI\xd3N",text:"Desea re abrir este elemento?",type:"warning",showCancelButton:!0,focusConfirm:!1,cancelButtonText:"No, cancelar!",confirmButtonText:"Si, re abrir!",showLoaderOnConfirm:!0,preConfirm:function(){e.submit()}})}function createCerrarParameter(e){let t=Swal.mixin({customClass:{confirmButton:"btn btn-success",cancelButton:"btn btn-secondary"},buttonsStyling:!1});t.fire({title:"CONFIRMACI\xd3N",input:"select",inputOptions:{Cumplido:"Cumplido","No Cumplido":"No Cumplido"},text:"Desea cerrar este elemento? Debe especificar el cumplimiento.",type:"success",showCancelButton:!0,focusConfirm:!1,cancelButtonText:"No, cancelar!",confirmButtonText:"Si, cerrar!",showLoaderOnConfirm:!0,preConfirm:function(t){$(e).find(".cumplimiento").attr("value",t),e.submit()}})}$(document).ready(function(){select2=$(".select2").select2({language:"es",theme:"bootstrap-5",allowClear:!0,placeholder:""}),multiple=$(".multiple2").select2({language:"es",theme:"bootstrap-5",allowClear:!0,closeOnSelect:!1,placeholder:""}),$(".datepick").daterangepicker({autoUpdateInput:!1,singleDatePicker:!0,showDropdowns:!0,locale:{format:"DD-MM-YYYY",cancelLabel:"Limpiar",applyLabel:"Aplicar",daysOfWeek:["Do","Lu","Ma","Mi","Ju","Vi","S\xe1"],monthNames:["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"]}}),$(".datepick").on("apply.daterangepicker",function(e,t){$(this).val(t.startDate.format("DD-MM-YYYY"))}),$(".datepick").on("cancel.daterangepicker",function(e,t){$(this).val("")}),$(".daterange").daterangepicker({ranges:{"\xdaltimos 7 d\xedas":[moment().subtract(6,"days"),moment()],"\xdaltimos 30 d\xedas":[moment().subtract(29,"days"),moment()],"Mes Pasado":[moment().subtract(1,"month").startOf("month"),moment().subtract(1,"month").endOf("month")],"A\xf1o Pasado":[moment().subtract(1,"year").startOf("year"),moment().subtract(1,"year").endOf("year")]},autoUpdateInput:!1,alwaysShowCalendars:!0,linkedCalendars:!1,showDropdowns:!1,locale:{format:"DD-MM-YYYY",separator:" a ",cancelLabel:"Limpiar",applyLabel:"Aplicar",linkedCalendars:!1,daysOfWeek:["Do","Lu","Ma","Mi","Ju","Vi","S\xe1"],monthNames:["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"]}}),$(".daterange").on("apply.daterangepicker",function(e,t){$(this).val(t.startDate.format("DD-MM-YYYY")+" a "+t.endDate.format("DD-MM-YYYY"))}),$(".daterange").on("cancel.daterangepicker",function(e,t){$(this).val("")})});