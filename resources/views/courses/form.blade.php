
<form method="post" action="{{ route('courses.registerCourse') }}">
@csrf
<table width="80%" align="center">


<tr><td colspan="2">
    <h3>@lang('courses.courseData')</h3>
</td></tr>
    
<tr><td>
    @lang('courses.adminName')
</td>
<td align="right">
    <input type="text" name="adminName"/>
</td></tr>
    
<tr><td>
    @lang('courses.workshopName')
</td>
<td align="right">
    <input type="text" name="workshop"/>
</td></tr>

<tr><td>
    @lang('courses.courseCode')
</td>
<td align="right">
    <input type="text" name="code"/>
</td></tr>

<tr><td>
    @lang('courses.courseNameHun')
</td>
<td align="right">
    <input type="text" name="nameHun"/>
</td></tr>

<tr><td>
    @lang('courses.courseNameEn')
</td>
<td align="right">
    <input type="text" name="nameEn"/>
</td></tr>
                                
<tr><td>
    @lang('courses.courseCredits')
</td>
<td align="right">
    <input type="number" name="credits"/>
</td></tr>
                                
<tr><td>
    @lang('courses.courseWeeklyHours')
</td>
<td align="right">
    <input type="number" name="weeklyHours"/>
</td></tr>
                            
<tr><td>
    @lang('courses.courseSemesterHours')
</td>
<td align="right">
    <input type="number" name="semesterHours"/>
</td></tr>
                                
<tr><td>
    @lang('courses.courseType')
</td>
<td align="right">
    <input type="text" name="type"/>
</td></tr>
    
<tr><td colspan="2">
    <h4>@lang('courses.courseLocation')</h4>
</td></tr>
    
<tr><td>
    @lang('courses.courseCampus')
</td>
<td align="right">
    <input type="text" name="campus"/>
</td></tr>
    
<tr><td>
    @lang('courses.courseBuilding')
</td>
<td align="right">
    <input type="text" name="building"/>
</td></tr>
    
<tr><td>
    @lang('courses.courseRoom')
</td>
<td align="right">
    <input type="text" name="room"/>
</td></tr>
    
<tr><td colspan="2">
    <h4>@lang('courses.courseDayTime')</h4>
</td></tr>

<tr><td>
    @lang('courses.courseDay')
</td>
<td align="right">
    <select name="day">
        <option value="monday">@lang('courses.monday')</option>
        <option value="tuesday">@lang('courses.tuesday')</option>
        <option value="wednesday">@lang('courses.wednesday')</option>
        <option value="thursday">@lang('courses.thursday')</option>
        <option value="friday">@lang('courses.friday')</option>
    </select>
</td></tr>
    
<tr><td>
    @lang('courses.courseTime')
</td>
<td align="right">
    <input type="time" name="time"/>
</td></tr>
    
<tr><td colspan="2">
    <h4>@lang('courses.courseTeacherData')</h4>
</td></tr>
    
<tr><td>
    @lang('courses.courseTeacherName')
</td>
<td align="right">
    <input type="text" name="teacherName"/>
</td></tr>
    
<tr><td>
    @lang('courses.courseTeacherCode')
</td>
<td align="right">
    <input type="text" name="teacherCode"/>
</td></tr>
    
<tr><td colspan="2">
    <h4>@lang('courses.courseNote')</h4>
</td></tr>
    
<tr><td colspan="2">
    <textarea name="note" rows="5" cols="70">
    </textarea>
</td></tr>
       
<tr><td colspan="2">
    <input type="submit" class="form-control btn btn-primary" value="@lang('courses.register')"/>
</td></tr>                     
</table>

</form>
