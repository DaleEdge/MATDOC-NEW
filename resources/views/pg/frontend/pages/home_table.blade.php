@php

  function singularize($word)
  {
    $singular = array(
    '/(quiz)zes$/i' => '\1',
    '/(matr)ices$/i' => '\1ix',
    '/(vert|ind)ices$/i' => '\1ex',
    '/^(ox)en/i' => '\1',
    '/(alias|status)es$/i' => '\1',
    '/([octop|vir])i$/i' => '\1us',
    '/(cris|ax|test)es$/i' => '\1is',
    '/(shoe)s$/i' => '\1',
    '/(o)es$/i' => '\1',
    '/(bus)es$/i' => '\1',
    '/([m|l])ice$/i' => '\1ouse',
    '/(x|ch|ss|sh)es$/i' => '\1',
    '/(m)ovies$/i' => '\1ovie',
    '/(s)eries$/i' => '\1eries',
    '/([^aeiouy]|qu)ies$/i' => '\1y',
    '/([lr])ves$/i' => '\1f',
    '/(tive)s$/i' => '\1',
    '/(hive)s$/i' => '\1',
    '/([^f])ves$/i' => '\1fe',
    '/(^analy)ses$/i' => '\1sis',
    '/((a)naly|(b)a|(d)iagno|(p)arenthe|(p)rogno|(s)ynop|(t)he)ses$/i' => '\1\2sis',
    '/([ti])a$/i' => '\1um',
    '/(n)ews$/i' => '\1ews',
    '/s$/i' => '',
    );

    $uncountable = array('equipment', 'information', 'rice', 'money', 'species', 'series', 'fish', 'sheep');

    $irregular = array(
    'person' => 'people',
    'man' => 'men',
    'child' => 'children',
    'sex' => 'sexes',
    'move' => 'moves'
    );

    $lowercased_word = strtolower($word);
    foreach ($uncountable as $_uncountable) {
    if (substr($lowercased_word, (-1 * strlen($_uncountable))) == $_uncountable) {
      return $word;
    }
    }

    foreach ($irregular as $_plural => $_singular) {
    if (preg_match('/(' . $_singular . ')$/i', $word, $arr)) {
      return preg_replace('/(' . $_singular . ')$/i', substr($arr[0], 0, 1) . substr($_plural, 1), $word);
    }
    }

    foreach ($singular as $rule => $replacement) {
    if (preg_match($rule, $word)) {
      return preg_replace($rule, $replacement, $word);
    }
    }

    return $word;
  }

 @endphp


<div class="col-md-12">
  <div class="card mt-3">
    <div class="border-0 card">
      <div class="card-body p-0">
        <div class="table-responsive">
          <table class="table" style="white-space:nowrap;">
            <thead>
              <tr>
                <th>Round</th>
                <th>All India Rank</th>
                <th>State Rank</th>
                <th>Neet Score</th>
                <th>State</th>
                <th>Institute</th>
                <th>Course</th>
                <th>Quota</th>
                <th>Category</th>
                <th>Fee</th>
                <th>Beds</th>
              </tr>
            </thead>
            <tbody>
              @if($list->isEmpty())
          <tr>
          <td colspan="11" style="text-align:center;">No data found</td>
          </tr>
        @else
        @foreach($list as $data)
      <tr>
      <td>{{ $data->round }}</td>
      <td>{{ $data->all_india_rank }}</td>
      <td>{{ $data->state_rank }}</td>
      <td>{{ $data->neet_score }}</td>
      <td>{{ $data->state }}</td>
      <td>{{ $data->institute }}</td>
      <td>{{ $data->course }}</td>
      <td>{{ $data->quota }}</td>
      <td>{{ $data->category }}</td>
      <td>{{ $data->fee }}</td>
      <td>{{ $data->beds }}</td>
      </tr>
    @endforeach
      @endif
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>