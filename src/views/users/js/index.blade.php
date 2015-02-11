<script type="text/javascript">
    function deleteElement(id){
        var url = "{{ URL::to(Config::get('pulsar::pulsar.rootUri')) }}/pulsar/usuarios/destroy/"+id;
        @include('pulsar::pulsar.pulsar.common.js.script_delete_element')
    }
    
    @include('pulsar::pulsar.pulsar.common.js.script_delete_elements')
    
    $(document).ready(function() {
        @include('pulsar::pulsar.pulsar.common.js.script_success_mensaje')
        @include('pulsar::pulsar.pulsar.common.js.script_config_datatable')
        if ($.fn.dataTable) {
            $('.datatable-pulsar').dataTable({
                'iDisplayStart' : {{ $inicio }},
                'aoColumnDefs': [
                        { 'bSortable': false, 'aTargets': [6,7]},
                        { 'sClass': 'align-center', 'aTargets': [5]},
                        { 'sClass': 'checkbox-column', 'aTargets': [6]},
                        { 'sClass': 'align-center', 'aTargets': [7]}
                ],
                "bProcessing": true,
                "bServerSide": true,
                "sAjaxSource": "{{ URL::to(Config::get('pulsar::pulsar.rootUri')) }}/pulsar/usuarios/json/data"
            }).fnSetFilteringDelay();
            @include('pulsar::pulsar.pulsar.common.js.script_button_delete')
        }
    });
</script>