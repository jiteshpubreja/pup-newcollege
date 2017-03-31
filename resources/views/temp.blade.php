Discrepancy Name - Remarks
<br>
@foreach($colleges as $college)

@if($college->form)
{{$college->form->college_name}}
@else
{{$college->user->fname." ".$college->user->lname}}
@endif

<br>
@foreach($college->inspections[0]->discrepancies as $discrepancy)
@if($discrepancy->is_discrepancy)
{{$discrepancy->listname->name}} - {{ $discrepancy->remarks ? $discrepancy->remarks : "{Not Provided}" }}
<br>
@endif
@endforeach
<hr>
@endforeach