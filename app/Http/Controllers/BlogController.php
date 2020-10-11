<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
class BlogController extends Controller
{
    public function blog(){
    	return view('admin.blog.add_blog');
    }
    public function addblog(Request $request){
    	if($request->isMethod('post')){

    		 $file=$request->file('image');
            $filename='image' . time().'.'.$request->image->extension();
            $file->move("uploads/blog",$filename);


    		$data = $request->all();
    		$blog = new Blog;
    		$blog->heading = $data['blog_heading'];
    		$blog->content = $data['blog_content'];
            $blog->image=$filename;
    		$blog->save();
    		return redirect('/admin/blog/view-blog')->with('flash_message_success','Your Blog has been successfully added');
    	}
     
    }

    public function view(){
    	$blog = Blog::get();
    	return view('admin.blog.view_blog')->with(compact('blog'));
    }

   public function editblog($id){
   	$blog = Blog::find($id);
   	return view('/admin/blog/edit_blog',compact('blog'));
   }



   public function updateblog(Request $reque){
   
     if($reque->hasFile('image'))
          {
            $file=$reque->file('image');
        $filename ='image' .time() . '.'.$reque->image->extension();
        $file->move('upload/',$filename);
        
        $reque=Blog::find($reque->id);

        $blog->image=$filename;
        $blog->heading=$reque->blog_heading; 
        $blog->content=$reque->blog_content;

        $updated=$blog->save();
      }
         else {

        $blog=Blog::find($reque->id);
        $blog->heading=$reque->blog_heading; 
        $blog->content=$reque->blog_content;
          $updated=$blog->save();
         }
         if ($updated) {
           return redirect('/admin/blog/view-blog')->with('flash_message_success','succesfully updated');
         }
        
    }

    public function deleteblog($id)
    {
        $blog=Blog::find($id);
        $deleted=$blog->delete();
        if($deleted){
            return redirect('/admin/blog/view-blog')->with('flash_message_success','Successfully Deleted');
        }
    }
}
