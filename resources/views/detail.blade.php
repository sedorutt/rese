@extends('layouts.app')
@section('content')

<div class="header">
  <h2><a href="{{ route('menu') }}">Rese</a></h2>
</div>
<div class="container">
  <div class="detail">
    <div class="detail-left">
      <div class="left-header">
        <button class="return" type="button" onClick="history.back()"><</button>
        <p>{{ $shop->name }}</p>
      </div>
      <div class="detail-left-body">
        <img src="{{ $shop->image }}" alt="shop-image" class="shop-image">
        <div class="tags">
          <a href="" class="tags">#{{$shop->area->area}}</a>
          <a href="" class="tags">#{{$shop->genre->genre}}</a>
        </div>        
        <p class="body-text">{{ $shop->content }}</p>
      </div>
    </div>   
    <div class="detail-right">
      <div class="right-header">
        <p>予約</p>
      </div>
      <div class="detail-right-body">
        <form class="book-form" action="{{route('reserve',$shop->id )}}" method="POST" >
          {{ csrf_field() }}
          <input type="date" name="reserved_date" id="form-date" required>
          <input type="text" id="form-time" name="reserved_time" list="timeList"　required>
          <datalist id="timeList">
            @foreach ($times as $time)
              <option value="{{$time}}">
                {{$time}}
              </option>              
            @endforeach
          </datalist>
          <input type="number" id="form-number" name="number" placeholder="人数" min="1" required>       
          <div class="form-list">
            <table>
            <tr>
              <th>shop</th>
              <td>{{ $shop->name }}</td>
            </tr>
            <tr>
              <th>Date</th>
              <td id="output-date"></td>
            </tr>
            <tr>
              <th>Time</th>
              <td id="output-time"></td>
            </tr>
            <tr>
              <th>Number</th>
              <td id="output-number"></td>
            </tr>
          </table>
          </div>
          <button class="book-btn" type="submit">予約する</button>
        </form>
      </div>
    </div>
  </div>
</div>
<script>
  let form_date = document.getElementById('form-date');
  let output_date = document.getElementById('output-date');

  let form_time = document.getElementById('form-time');
  let output_time = document.getElementById('output-time');

  let form_number = document.getElementById('form-number');
  let output_number = document.getElementById('output-number');

  timestamp = 0;

  function update(){
    
    timestamp++;
    window.requestAnimationFrame(update);
    
    if (timestamp % 10 == 0 ){
      output_date.innerHTML = form_date.value;
      output_time.innerHTML = form_time.value;
      output_number.innerHTML = form_number.value;
    }
  }
  update();

</script>
@endsection

<style scoped>
  .detail {
    display: flex;
    justify-content: space-between;
  }
  .detail-left{
    width: 50%;
  }
  .left-header{
    display: flex;
  }
  .return {
    width: 25px;
    height: 25px;
    line-height: 1px;
    border: none;
    background-color: #fff;
    border-radius: 2px;
    box-shadow: 1px 1px 2px;
  }
  .left-header p {
    margin-left: 15px;
    font-size: 18px;
    font-weight: bold;
  }
  .shop-image{
    width: 90%;
  }
  .body-text{
    width: 90%;
  }
  .tags{
    margin: 15px 0; 
  }
  .detail-right{
    position: relative;
    background-color: rgb(36, 108, 241);
    width: 50%;
    padding-top: 25px;
    padding-right: 30px;
    padding-left: 25px;
    border-radius: 3px;
    overflow: hidden;
    box-shadow: 2px 2px 4px;
  }
  .detail-right p{
    color: #fff;
    font-size: 20px;
    font-weight: bold;
  }

  #form-date{
    width: 55%;
    margin-bottom: 10px;
    border: none;
    border-radius: 3px;
  }
  #form-time,
  #form-number{
    border: none;
    border-radius: 3px;
    margin-bottom: 10px;
    width: 100%;
  }
  .form-list{
    background-color: rgb(107, 153, 253);
    padding: 20px 15px;
    border-radius: 3px;
  }
  .form-list table {
    color: #fff;
  }
  .form-list table th{
    padding: 5px 55px 5px 0;
  }
  .book-btn{
    border: none;
    background-color: rgb(0, 14, 207);
    color: #fff;
    padding: 10px 0;
    width: 100%;
    position: absolute;
    left: 50%;
    bottom: 0;
    transform: translate(-50%, 0)
  }
</style>