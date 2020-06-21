@if($random < 20)
<p>{{$random}}は20未満です。</p>
@elseif($random < 50)
<p>{{$random}}は20以上50未満です。</p>
@else
<p>{{$random}}は50以上です。</p>
@endif