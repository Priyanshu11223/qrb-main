 <script>
@if ( session('failed'))

            iziToast.error({
    title: 'Error!',
    message: "{{ session('failed') }}",
    position: 'topRight'
  });

@endif

@if ( session('errors'))

            iziToast.error({
    title: 'Error!',
    message: "{{ session('errors')->first() }}",
    position: 'topRight'
  });

    @endif

@if ( session('successful'))
    iziToast.success({
    title: 'Great',
    message: '{{ session("successful") }}',
    position: 'topRight'
  });
@endif

@if ( session('success'))
    iziToast.success({
    title: 'Great',
    message: '{{ session("success") }}',
    position: 'topRight'
  });
@endif
    @if ( session('warning'))
    iziToast.warning({
    title: 'Ohh!',
    message: '{{ session("warning") }}',
    position: 'topRight'
  });
@endif
</script>

<script>
@if (session('status'))
    iziToast.success({
    title: 'Great',
    message: '{{ session("status") }}',
    position: 'topRight'
  });
@endif
</script>

<script>
    $(document).on('click','.delete-action', function(){
        var form_id = $(this).attr('data-form-id')
        $.confirm({
            title: '{{ __('Alert !') }}',
            content: '{{__('Are You sure ?')}}',
            buttons: {
                confirm: function () {
                    $("#"+form_id).submit();
                },
                cancel: function () {
                }
            }
        });
    });
</script>
