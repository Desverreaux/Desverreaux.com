<?php $lines = $PageObj->Data['lines']; ?>

@foreach($lines as $line)
    <p> {{$line}} </p>
@endforeach