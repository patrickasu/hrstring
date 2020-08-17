{{-- <div style="height:433px; background-color: #FFFFFF; overflow:hidden; box-sizing: border-box; border: 1px solid #56667F; border-radius: 4px; text-align: right; line-height:14px; font-size: 12px; font-feature-settings: normal; text-size-adjust: 100%; box-shadow: inset 0 -20px 0 0 #56667F; padding: 0px; margin: 0px; width: 100%;"><div style="height:413px; padding:0px; margin:0px; width: 100%;"><iframe src="https://widget.coinlib.io/widget?type=full_v2&theme=light&cnt=6&pref_coin_id=1505&graph=yes" width="100%" height="409px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;"></iframe></div><div style="color: #FFFFFF; line-height: 14px; font-weight: 400; font-size: 11px; box-sizing: border-box; padding: 2px 6px; width: 100%; font-family: Verdana, Tahoma, Arial, sans-serif;"><a href="https://coinlib.io" target="_blank" style="font-weight: 500; color: #FFFFFF; text-decoration:none; font-size:11px">Cryptocurrency Prices</a>&nbsp;by Coinlib</div></div> --}}

<!-- Introduction Field -->
<div class="form-group col-md-12">
    <h3>{!! Form::label('introduction', 'Introduction:') !!}</h3>
    <p>{{ $course->introduction }}</p>
</div>

<!-- Description Field -->
<div class="form-group col-md-12">
    <h3>{!! Form::label('description', 'Description:') !!}</h3>
    <p>{{ $course->description }}</p>
</div>

<div class="form-group col-md-12" style="margin-bottom: 20px">
    <?php 
        $matches = array();
        $url =   $course->course_url1 ;
        $ret = preg_match("#(?<=v=)[a-zA-Z0-9-]+(?=&)|(?<=v\/)[^&\n]+(?=\?)|(?<=v=)[^&\n]+|(?<=youtu.be/)[^&\n]+#", $url, $matches);
    ?>
    @if($ret > 0)
        <iframe width="95%" 
        height="450px" 
        src="https://www.youtube.com/embed/<?php echo  $matches[0]; ?>?&autoplay=1" 
        frameborder="0" 
        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
        allowfullscreen></iframe>
    @else
        <a href="{{ $course->course_url1 }}" target="_blank"> {{ $course->course_url1  }} </a>
    @endif
</div>

<div class="form-group col-md-12" style="margin-bottom: 20px">
    <?php 
        $matches = array();
        $url =   $course->course_url2 ;
        $ret = preg_match("#(?<=v=)[a-zA-Z0-9-]+(?=&)|(?<=v\/)[^&\n]+(?=\?)|(?<=v=)[^&\n]+|(?<=youtu.be/)[^&\n]+#", $url, $matches);
    ?>
    @if($ret > 0)
        <iframe width="95%" 
        height="450px" 
        src="https://www.youtube.com/embed/<?php echo  $matches[0]; ?>?&autoplay=1" 
        frameborder="0" 
        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
        allowfullscreen></iframe>
    @else
        <a href="{{ $course->course_url2 }}" target="_blank"> {{ $course->course_url2  }} </a>
    @endif
</div>

<div class="form-group col-md-12" style="margin-bottom: 20px">
    <?php 
        $matches = array();
        $url =   $course->course_url3 ;
        $ret = preg_match("#(?<=v=)[a-zA-Z0-9-]+(?=&)|(?<=v\/)[^&\n]+(?=\?)|(?<=v=)[^&\n]+|(?<=youtu.be/)[^&\n]+#", $url, $matches);
    ?>
    @if($ret > 0)
        <iframe width="95%" 
        height="450px" 
        src="https://www.youtube.com/embed/<?php echo  $matches[0]; ?>?&autoplay=1" 
        frameborder="0" 
        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
        allowfullscreen></iframe>
    @else
        <a href="{{ $course->course_url3 }}" target="_blank"> {{ $course->course_url3  }} </a>
    @endif
</div>

<div class="form-group col-md-12" style="margin-bottom: 20px">
<?php 
    $matches = array();
    $url =   $course->course_url4 ;
    $ret = preg_match("#(?<=v=)[a-zA-Z0-9-]+(?=&)|(?<=v\/)[^&\n]+(?=\?)|(?<=v=)[^&\n]+|(?<=youtu.be/)[^&\n]+#", $url, $matches);
?>
@if($ret > 0)
    <iframe width="95%" 
    height="450px" 
    src="https://www.youtube.com/embed/<?php echo  $matches[0]; ?>?&autoplay=1" 
    frameborder="0" 
    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
    allowfullscreen></iframe>
@else
    <a href="{{ $course->course_url4 }}" target="_blank"> {{ $course->course_url4  }} </a>
@endif
</div>

<!-- Slides -->
<h2 class="text-center" style="margin-top: 30px;">Slides</h2>
<div class="form-group col-md-12" style="margin-top: 10px;">
    <iframe style="position: relative; left: -1px; top: -2px;max-width: 100%;" src="{{ $course->course_url5 }}"  frameborder="0" width="960" height="569" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true"></iframe>
</div>

<!-- Resources Field -->
<div class="form-group col-md-12" style="margin-top: 50px;">
    <h3>{!! Form::label('resources', 'Resources:') !!}</h3>
    <p>{{ $course->resources }}</p>
</div>


{{-- <div class="iframe" style="margin-top: 50px;">
    <iframe src="https://docs.google.com/presentation/d/e/2PACX-1vQ1yrs8EAjWPvpEW-pV1BPks43snVv6SAcWxR-YbCowpDo6R8pUlq1nbMQQIWEkcCJnH_qpuThRgNa2/embed?start=false&loop=false&delayms=3000" frameborder="0" width="960" height="569" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true"></iframe>
</div> --}}

<!-- User Id Field -->
{{-- <div class="form-group">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{{ $course->user_id }}</p>
</div>

<!-- Category Id Field -->
<div class="form-group">
    {!! Form::label('category_id', 'Category Id:') !!}
    <p>{{ $course->category_id }}</p>
</div>

<!-- Course Name Field -->
<div class="form-group">
    {!! Form::label('course_name', 'Course Name:') !!}
    <p>{{ $course->course_name }}</p>
</div>

<!-- Assign Date Field -->
<div class="form-group">
    {!! Form::label('assign_date', 'Assign Date:') !!}
    <p>{{ $course->assign_date }}</p>
</div>

<!-- Course Url Field -->
<div class="form-group">
    {!! Form::label('course_url', 'Course Url:') !!}
    <p>{{ $course->course_url }}</p>
</div>

<!-- Expire Status Field -->
<div class="form-group">
    {!! Form::label('expire_status', 'Expire Status:') !!}
    <p>{{ $course->expire_status }}</p>
</div> --}}