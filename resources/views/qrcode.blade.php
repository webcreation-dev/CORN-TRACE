@php
    use SimpleSoftwareIO\QrCode\Facades\QrCode;
@endphp

<div class="visible-print text-center">
    {!! QrCode::size(100)->generate('Make me into a QrCode!'); !!}
    <p>Scan me to return to the original page.</p>
</div>
