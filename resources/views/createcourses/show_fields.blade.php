<!-- Course Name Field -->
<div class="form-group">
    {!! Form::label('course_name', 'Course Name:') !!}
    <p>{{ $createcourse->course_name }}</p>
</div>

<!-- Introduction Field -->
<div class="form-group">
    {!! Form::label('introduction', 'Introduction:') !!}
    <p>{{ $createcourse->introduction }}</p>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $createcourse->description }}</p>
</div>

<!-- Course Url1 Field -->
{{-- <div class="form-group">
    {!! Form::label('course_url1', 'Course Url1:') !!}
    <p>{{ $createcourse->course_url1 }}</p>
</div> --}}

<div class="form-group col-md-12" style="margin-bottom: 20px">
    <?php 
        $matches = array();
        $url =   $createcourse->course_url1 ;
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
        <a href="{{ $createcourse->course_url1 }}" target="_blank"> {{ $createcourse->course_url1  }} </a>
    @endif
</div>

<div class="form-group col-md-12" style="margin-bottom: 20px">
    <?php 
        $matches = array();
        $url =   $createcourse->course_url2 ;
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
        <a href="{{ $createcourse->course_url2 }}" target="_blank"> {{ $createcourse->course_url2  }} </a>
    @endif
</div>

<div class="form-group col-md-12" style="margin-bottom: 20px">
    <?php 
        $matches = array();
        $url =   $createcourse->course_url3 ;
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
        <a href="{{ $createcourse->course_url3 }}" target="_blank"> {{ $createcourse->course_url3  }} </a>
    @endif
</div>

<div class="form-group col-md-12" style="margin-bottom: 20px">
    <?php 
        $matches = array();
        $url =   $createcourse->course_url4 ;
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
        <a href="{{ $createcourse->course_url4 }}" target="_blank"> {{ $createcourse->course_url4  }} </a>
    @endif
</div>

<!-- Slides -->
<h2 class="text-center" style="margin-top: 30px;">Slides</h2>
<div class="form-group col-md-12" style="margin-top: 10px;">
    <iframe style="position: relative; left: -1px; top: -2px;max-width: 100%;" src="{{ $createcourse->course_url5 }}"  frameborder="0" width="960" height="569" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true"></iframe>
</div>

<!-- Resources Field -->
<div class="form-group">
    {!! Form::label('resources', 'Resources:') !!}
    <p>{{ $createcourse->resources }}</p>
</div>