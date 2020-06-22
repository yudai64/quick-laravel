@extends('layouts.base')
@section('title', '共通レイアウトの基本')
@section('main')
@include('components.alert', [
  'type' => 'success',
  'alert_title' => 'はじめてのコンポーネント',
  'slot' => 'コンポーネントは普通のビューと同じように.blade.phpファイルで定義できます！'
])
@endsection
