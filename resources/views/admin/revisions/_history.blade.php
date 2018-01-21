<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#revisionModal">
    <span class="icon"><i class="fa fa-history"></i></span>
    <span>{{ __('revisions.show_revisions') }}</span>
</button>

<!-- Modal -->
<div class="modal fade" id="revisionModal" tabindex="-1" role="dialog" aria-labelledby="revisionModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="revisionModalLabel">{{ __('revisions.revisions') }}</h4>
            </div>
            <div class="modal-body">
                <table class="table table-striped table-hover table-condensed" id="datatable-revisions">
                    <thead>
                    <tr>
                        <th>{{ __('revisions.key') }}</th>
                        <th>{{ __('revisions.old_value') }}</th>
                        <th>{{ __('revisions.new_value') }}</th>
                        <th>{{ __('revisions.user_id') }}</th>
                    </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">{{ __('common.close') }}</button>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script type="text/javascript">
        $('#datatable-revisions').DataTable({
            processing: true,
            serverSide: true,
            responsive: true,
            ajax: {
                url: '{{ $route }}'
            },
            language: {
                url: "//cdn.datatables.net/plug-ins/1.10.13/i18n/Dutch.json"
            },
            columns: [
                {data: 'key', name: 'key'},
                {data: 'old_value', name: 'old_value'},
                {data: 'new_value', name: 'new_value'},
                {data: 'user_id', name: 'user_id'}
            ]
        });
    </script>
@endpush