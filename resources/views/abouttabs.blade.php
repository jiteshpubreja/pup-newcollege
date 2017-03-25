

<ul class="nav nav-pills nav-stacked">
    <li class="{{ is_active('introduction') }}"><a href="{{ route('introduction') }}">Introduction</a></li>
    <li><a href="{{asset('VC_Biodata.pdf')}}" target="_blank">Meet the VC </a></li>
    <li class="{{ is_active('infrastructure') }}"><a href="{{ route('infrastructure') }}">Infrastructure</a></li>
    <li class="{{ is_active('agrade') }}"><a href="{{ route('agrade') }}">'A' Grade Status</a></li>
    <li class="{{ is_active('publication') }}"><a href="{{ route('publication') }}">Publication Bureau</a></li>
    <li class="{{ is_active('museum') }}"><a href="{{ route('museum') }}">Museum</a></li>
    
  </ul>