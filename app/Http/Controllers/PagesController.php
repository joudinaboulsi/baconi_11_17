<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;
use App\Contact;
use App\Team;
use App\PrincipleSlider;
use App\MembershipSlider;
use App\AboutSlider;
use App\SeoPage;
use Session;
use SEO;
use SEOMeta;
use App\Settings;
use App\Company;
use App\SliderCompany;
use App\Blog;
use App\Service;
use App\HomeSlider;
use App\HomePage;
use App\ServiceTabOne;
use App\TitlePage;
use Illuminate\Support\Facades\Mail;


class PagesController extends Controller
{
    public function __construct()
    {
        app()->singleton('contact', function(){
            $settings = Settings::where('id','1')->get();
            return $settings[0];
        });
    }
    public function setSeo($page_data)
    {
      
       SEO::setTitle($page_data->meta_title, false);
       SEO::setDescription($page_data->meta_description, false);
       SEOMeta::setKeywords($page_data->meta_keywords, false);
     
        if($page_data->og_image != NULL) // check if we have an OG image
            SEO::addImages(getenv('APP_URL').'/assets/seo/'.$page_data->og_image); 
    }
    
    public function home()
    {
        $page_data =SeoPage::where('id',1)->get();
        $this->setSeo($page_data[0]);
    
        $sliders = HomeSlider::all();
        $homes = HomePage::where('id', '1')->get();
        $blogs = Blog::all();
        $companies = SliderCompany::all();
       

        return view('pages.home',compact('page_data','sliders','homes','companies','blogs'));
    }

    public function about()
    {
        
        $page_data =SeoPage::where('id',1)->get();
        $this->setSeo($page_data[0]);
        $abouts = About::where('id',1)->get();
        $memberships = MembershipSlider::all();
        $principles = PrincipleSlider::all();
        $sliders = AboutSlider::all();
        $team= Team::all();
     
        return view('pages.about',compact('abouts','memberships','principles','team','sliders','page_data'));
    }

    public function services()
    {

        $page_data =SeoPage::where('id',3)->get();
       
        $this->setSeo($page_data[0]);
        $services= Service::where('id',1)->get();
        $service_tab = ServiceTabOne::all();
        return view('pages.services',compact('services','service_tab','page_data'));
    }

    public function companies()
    {
        $page_data =SeoPage::where('id',4)->get();
       
        $this->setSeo($page_data[0]);
        $companies = Company::all();
        $sliders = SliderCompany::all();
        return view('pages.companies',compact('companies','sliders','page_data'));
    }

    public function blog()
    {

        $page_data =SeoPage::where('id',5)->get();
        $this->setSeo($page_data[0]);
        $blogs = Blog::all();
        $title = TitlePage::where('id',1)->get();
        return view('pages.blogs',compact('blogs','page_data','title'));
    }


    public function blogDetail($id)
    {
        
        $blog_page = Blog::where('id',$id)->first();  
        $this->setSeo($blog_page);   
        $blog = Blog::where('id',$id)->get();
        $latest_blogs = Blog::where('id' ,'!=', $id)->latest('date')->paginate(5);
        $related_blogs = Blog::where('id', '!=', $id)->paginate(6);
        $services = Service::all();
        $title = TitlePage::where('id',2)->get();
        return view('pages.blog_details',compact('blog','services','latest_blogs','title','related_blogs','blog_page'));
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
    
        $blogs = Blog::where('title', 'like', "%$query%")
                     ->orWhere('text_blog', 'like', "%$query%")
                     ->get();
    
        return view('pages.search', compact('blogs'));
    }



    public function contact()
    {

        $page_data =SeoPage::where('id',6)->get();
        $this->setSeo($page_data[0]);
        $contact = Contact::all();
        return view('pages.contact',compact('contact','page_data'));
    }
    
      //Get the contact form details and send the mail
      public function send_mail(Request $request)
      {
          $name = $request->input('name');
          $email_client = $request->input('email');
          $phone = $request->input('phone');
          $msg_client = $request->input('message');
          
          // if form is full
          if (! empty($_POST))
          {
              // send email to admin
              Mail::send('emails.contact', array('name' => $name, 'email' => $email_client, 'phone'=>$pohone,'messsage' => $msg_client), function($message) use ($email_client, $name,$phone) {
                 $message->from($email_client, $name);
                 $message->to('info@baconigroup.com')->subject('Message from Website');
              });
  
              \Session::flash('msg', 'Successfully sent!' );
              return redirect()->back();
          }
      }
      public function send_career(Request $request)
      {
          $name = $request->input('name');
          $email_client = $request->input('email');
          $phone = $request->input('phone');
          $msg_client = $request->input('message');
          $file = $request->file('file');
          $fileName = $file->getClientOriginalName();
          // if form is full
          if (! empty($_POST))
          {
              // send email to admin
              Mail::send('emails.career', array('name' => $name, 'email' => $email_client, 'phone'=>$phone,'messsage' => $msg_client), function($message) use ($email_client, $name, $phone,$file, $fileName) {
                 $message->from($email_client, $name);
                 $message->to('info@baconigroup.com')->subject('Message from Website')
                 ->attach($file, [
                    'as' => $fileName,
                    'mime' => $file->getClientMimeType(),
                ]);
              });

             

  
              \Session::flash('msg', 'Successfully sent!' );
              return redirect()->back();
          }
      }


}
