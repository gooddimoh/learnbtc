<?php

namespace App\Http\Controllers;

use CoinbaseCommerce\ApiClient;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function landing1()
    {
        //        $review = Review::where('id', '=', $request->id)->where('user_id', '=', auth()->user()->id)->first();
        //        if ($review) {
        //            $course = $review->reviewable;
        //            $recent_news = Blog::orderBy('created_at', 'desc')->take(2)->get();
        //            $purchased_course = \Auth::check() && $course->students()->where('user_id', \Auth::id())->count() > 0;
        //            $course_rating = 0;
        //            $total_ratings = 0;
        //            $lessons = $course->courseTimeline()->orderby('sequence', 'asc')->get();
        //
        //            if ($course->reviews->count() > 0) {
        //                $course_rating = $course->reviews->avg('rating');
        //                $total_ratings = $course->reviews()->where('rating', '!=', "")->get()->count();
        //            }
        //            if (\Auth::check()) {
        //
        //                $completed_lessons = \Auth::user()->chapters()->where('course_id', $course->id)->get()->pluck('model_id')->toArray();
        //                $continue_course = $course->courseTimeline()->orderby('sequence', 'asc')->whereNotIn('model_id', $completed_lessons)->first();
        //                if ($continue_course == "") {
        //                    $continue_course = $course->courseTimeline()->orderby('sequence', 'asc')->first();
        //                }
        //
        //            }
        //            return view($this->path . '.courses.course', compact('course', 'purchased_course', 'recent_news', 'completed_lessons', 'continue_course', 'course_rating', 'total_ratings', 'lessons', 'review'));
        //        }
        //        return abort(404);

        return "landing1";
    }

    public function landing2($apiKey)
    {
        //        return view($this->path . '.courses.course', compact('course', 'purchased_course', 'recent_news', 'completed_lessons', 'continue_course', 'course_rating', 'total_ratings', 'lessons', 'review'));

        return "landing2";

    }

    public function landing3($apiKey)
    {
//        return view($this->path . '.courses.course', compact('course', 'purchased_course', 'recent_news', 'completed_lessons', 'continue_course', 'course_rating', 'total_ratings', 'lessons', 'review'));
        return "landing3";

    }
}
