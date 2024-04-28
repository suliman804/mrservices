<?php
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\Admin\ReviewsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\StripePaymentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect()->route('welcome');
});
Auth::routes();
Route::post('contactUs-store', [App\Http\Controllers\HomeController::class, 'massegeStore'])->name('contactUs.store');

Route::get('/', [App\Http\Controllers\HomeController::class, 'welcome'])->name('welcome');

Route::get('about-us', [App\Http\Controllers\HomeController::class, 'about_us'])->name('about_us');
Route::get('faqs', [App\Http\Controllers\HomeController::class, 'faq'])->name('faqs');

Route::get('quotation', [App\Http\Controllers\HomeController::class, 'quotation'])->name('/quotation');

Route::get('reviews', [App\Http\Controllers\HomeController::class, 'reviews'])->name('reviews');


Route::get('careers', [App\Http\Controllers\HomeController::class, 'careers'])->name('careers');

Route::post('career/post', [App\Http\Controllers\HomeController::class, 'career_post'])->name('career/post');

Route::get('contactus', [App\Http\Controllers\HomeController::class, 'contactus'])->name('contactus');
Route::post('/subscription-store', [SubscriptionController::class, 'subscriptionStore'])->name('subscription.store');

Route::get('team', [App\Http\Controllers\HomeController::class, 'team'])->name('team');

Route::get('reviews', [App\Http\Controllers\HomeController::class, 'reviews'])->name('reviews');

Route::get('register/portfolio', [App\Http\Controllers\PortfolioController::class, 'register_portfolio'])->name('register_portfolio');

Route::get('privacy-policy', [App\Http\Controllers\HomeController::class, 'privacy'])->name('privacy');

Route::post('savecontactus', [App\Http\Controllers\HomeController::class, 'savecontactus'])->name('savecontactus');

// Route::post('/savequote', function(){

// 	echo "<script>alert('Save Quote')</script>";
// });
Route::post('/savequote', [App\Http\Controllers\HomeController::class, 'saveQuote'])->name('savequote');

Route::post('savereview', [App\Http\Controllers\HomeController::class, 'savereview'])->name('savereview');

Route::get('thankyou', [App\Http\Controllers\HomeController::class, 'thankyou'])->name('thankyou');

Route::get('career/thankyou', [App\Http\Controllers\HomeController::class, 'career_thankyou'])->name('career_thankyou');

Route::get('products', [App\Http\Controllers\ProductController::class, 'products'])->name('products');

Route::get('product/view/{id}', [App\Http\Controllers\ProductController::class, 'product_view'])->name('product_view');

Route::get('get-a-quote/{slug}', [App\Http\Controllers\ProductController::class, 'get_a_quote'])->name('get-a-quote');

Route::post('saverequestquote', [App\Http\Controllers\ProductController::class, 'saverequestquote'])->name('saverequestquote');

Route::get('services', [App\Http\Controllers\HomeController::class, 'services'])->name('services');

Route::get('projects', [App\Http\Controllers\HomeController::class, 'projects'])->name('projects');

Route::get('courses', [App\Http\Controllers\CourseController::class, 'courses'])->name('courses');

Route::get('course/detail/{slug}', [App\Http\Controllers\CourseController::class, 'courses_details'])->name('course.details');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');

Route::get('/frontend/settings', [App\Http\Controllers\Admin\FrontendController::class, 'frontend_settings'])->name('admin.frontend_settings')->middleware('auth');

Route::get('/frontend/settings/homepage/slider/delete/{id}', [App\Http\Controllers\Admin\FrontendController::class, 'frontend_settings_homepage_slider_delete'])->name('admin.homepageslider.delete')->middleware('auth');

Route::post('/frontend/settings/homepage/slider', [App\Http\Controllers\Admin\FrontendController::class, 'frontend_settings_homepage_slider_save'])->name('admin.save.homepageslider')->middleware('auth');

Route::get('/frontend/settings/info', [App\Http\Controllers\Admin\FrontendController::class, 'frontend_settings_info'])->name('admin.frontend_settings_info')->middleware('auth');

Route::post('/frontend/settings/info/save', [App\Http\Controllers\Admin\FrontendController::class, 'frontend_settings_info_save'])->name('admin.save.info')->middleware('auth');

Route::get('/frontend/settings/about', [App\Http\Controllers\Admin\FrontendController::class, 'frontend_settings_about'])->name('admin.frontend_settings_about')->middleware('auth');

Route::post('/frontend/settings/about/save', [App\Http\Controllers\Admin\FrontendController::class, 'frontend_settings_about_save'])->name('admin.save.about')->middleware('auth');

Route::get('/frontend/settings/gallery', [App\Http\Controllers\Admin\FrontendController::class, 'frontend_settings_gallery'])->name('admin.frontend_settings_gallery')->middleware('auth');

Route::get('/frontend/settings/homepage/gallery/delete/{id}', [App\Http\Controllers\Admin\FrontendController::class, 'frontend_settings_homepage_gallery_delete'])->name('admin.gallery.delete')->middleware('auth');

Route::get('/frontend/settings/homepage/event/delete/{id}', [App\Http\Controllers\Admin\FrontendController::class, 'frontend_settings_homepage_event_delete'])->name('admin.event.delete')->middleware('auth');

Route::post('/frontend/settings/gallery/save', [App\Http\Controllers\Admin\FrontendController::class, 'frontend_settings_gallery_save'])->name('admin.save.gallery')->middleware('auth');


Route::get('/frontend/settings/events/load', [App\Http\Controllers\Admin\FrontendController::class, 'frontend_settings_events'])->name('admin.frontend_settings_events')->middleware('auth');

Route::get('/frontend/settings/events', [App\Http\Controllers\Admin\FrontendController::class, 'frontend_settings_events'])->name('admin.save.events')->middleware('auth');

Route::get('/frontend/settings/address/', [App\Http\Controllers\Admin\FrontendController::class, 'frontend_settings_address'])->name('admin.frontend_settings_address')->middleware('auth');

Route::post('/frontend/settings/address/save', [App\Http\Controllers\Admin\FrontendController::class, 'frontend_settings_address_save'])->name('admin.save.address')->middleware('auth');


Route::get('/frontend/settings/footer', [App\Http\Controllers\Admin\FrontendController::class, 'frontend_settings_footer'])->name('admin.frontend_settings_footer')->middleware('auth');


Route::post('/frontend/settings/footer/save', [App\Http\Controllers\Admin\FrontendController::class, 'frontend_settings_footer_save'])->name('admin.save.footer')->middleware('auth');



Route::get('/frontend/settings/insights', [App\Http\Controllers\Admin\FrontendController::class, 'frontend_settings_insights'])->name('admin.frontend_settings_insights')->middleware('auth');

Route::post('/frontend/settings/insights/save', [App\Http\Controllers\Admin\FrontendController::class, 'frontend_settings_insights_save'])->name('admin.save.insights')->middleware('auth');


Route::get('/contact-us', [App\Http\Controllers\Admin\ContactUsController::class, 'contact_us'])->name('admin.contact_us')->middleware('auth');

Route::post('/delete-contact-us', [App\Http\Controllers\Admin\ContactUsController::class, 'contact_us_delete'])->name('admin.delete.contact.us')->middleware('auth');

Route::post('/read-contact-us', [App\Http\Controllers\Admin\ContactUsController::class, 'contact_us_readALL'])->name('admin.readALL.contact.us')->middleware('auth');

Route::get('/read-contact-us-all', [App\Http\Controllers\Admin\ContactUsController::class, 'contact_us_mark_all'])->name('admin.mark_as_read.contact.us')->middleware('auth');

Route::get('/records/careers', [App\Http\Controllers\Admin\CareerController::class, 'careers'])->name('admin.careers')->middleware('auth');

Route::get('/records/careers/reply/{id}', [App\Http\Controllers\Admin\CareerController::class, 'careers_reply'])->name('admin.careers.reply')->middleware('auth');

Route::post('/records/careers/reply/save/', [App\Http\Controllers\Admin\CareerController::class, 'careers_reply_save'])->name('admin.career.reply.save')->middleware('auth');

Route::get('/contacts/reply/{id}', [App\Http\Controllers\Admin\ContactUsController::class, 'contacts_reply'])->name('admin.contacts.reply')->middleware('auth');
Route::get('/contacts/block/{id}', [App\Http\Controllers\Admin\ContactUsController::class, 'contacts_block'])->name('admin.contacts.block')->middleware('auth');

Route::post('/contacts/reply/save/', [App\Http\Controllers\Admin\ContactUsController::class, 'contacts_reply_save'])->name('admin.contacts.reply.save')->middleware('auth');



Route::get('/products/index', [App\Http\Controllers\Admin\ProductController::class, 'index'])->name('admin.products')->middleware('auth');
Route::get('/product/create', [App\Http\Controllers\Admin\ProductController::class, 'create'])->name('admin.product.create')->middleware('auth');
Route::post('/product/save', [App\Http\Controllers\Admin\ProductController::class, 'save'])->name('admin.product.save')->middleware('auth');
Route::get('/product/edit/{id}', [App\Http\Controllers\Admin\ProductController::class, 'edit'])->name('admin.product.edit')->middleware('auth');
Route::get('/product/delete/{id}', [App\Http\Controllers\Admin\ProductController::class, 'delete'])->name('admin.product.delete')->middleware('auth');
Route::post('/product/update', [App\Http\Controllers\Admin\ProductController::class, 'update'])->name('admin.product.update')->middleware('auth');

// Route::resource('review', ReviewsController::class)->middleware('auth');

Route::get('/review/index', [App\Http\Controllers\Admin\ReviewsController::class, 'index'])->name('admin.review')->middleware('auth');
Route::get('/review/create', [App\Http\Controllers\Admin\ReviewsController::class, 'create'])->name('admin.review.create')->middleware('auth');
Route::post('/review/save', [App\Http\Controllers\Admin\ReviewsController::class, 'save'])->name('admin.review.save')->middleware('auth');
Route::get('/review/edit/{id}', [App\Http\Controllers\Admin\ReviewsController::class, 'edit'])->name('admin.review.edit')->middleware('auth');
Route::get('/review/delete/{id}', [App\Http\Controllers\Admin\ReviewsController::class, 'delete'])->name('admin.review.delete')->middleware('auth');
Route::post('/review/update', [App\Http\Controllers\Admin\ReviewsController::class, 'update'])->name('admin.review.update')->middleware('auth');

Route::get('/faqs/index', [App\Http\Controllers\Admin\FaqsController::class, 'index'])->name('admin.faqs')->middleware('auth');
Route::get('/faqs/create', [App\Http\Controllers\Admin\FaqsController::class, 'create'])->name('admin.faqs.create')->middleware('auth');
Route::post('/faqs/save', [App\Http\Controllers\Admin\FaqsController::class, 'save'])->name('admin.faqs.save')->middleware('auth');
Route::get('/faqs/edit/{id}', [App\Http\Controllers\Admin\FaqsController::class, 'edit'])->name('admin.faqs.edit')->middleware('auth');
Route::get('/faqs/delete/{id}', [App\Http\Controllers\Admin\FaqsController::class, 'delete'])->name('admin.faqs.delete')->middleware('auth');
Route::post('/faqs/update', [App\Http\Controllers\Admin\FaqsController::class, 'update'])->name('admin.faqs.update')->middleware('auth');

Route::get('/courses/index', [App\Http\Controllers\Admin\CoursesController::class, 'index'])->name('admin.courses')->middleware('auth');
Route::get('/course/create', [App\Http\Controllers\Admin\CoursesController::class, 'create'])->name('admin.course.create')->middleware('auth');
Route::post('/course/save', [App\Http\Controllers\Admin\CoursesController::class, 'save'])->name('admin.course.save')->middleware('auth');
Route::get('/course/edit/{id}', [App\Http\Controllers\Admin\CoursesController::class, 'edit'])->name('admin.course.edit')->middleware('auth');
Route::get('/course/delete/{id}', [App\Http\Controllers\Admin\CoursesController::class, 'delete'])->name('admin.course.delete')->middleware('auth');
Route::post('/course/update', [App\Http\Controllers\Admin\CoursesController::class, 'update'])->name('admin.course.update')->middleware('auth');

Route::get('/careers/list', [App\Http\Controllers\Admin\CareerController::class, 'careers_list'])->name('admin.careers_list')->middleware('auth');
Route::post('/save/careers/list', [App\Http\Controllers\Admin\CareerController::class, 'careers_list_save'])->name('admin.careers_list.save')->middleware('auth');
Route::get('/status/careers/{id}', [App\Http\Controllers\Admin\CareerController::class, 'careers_list_status'])->name('admin.careers_list.status')->middleware('auth');

Route::post('/read-career-us', [App\Http\Controllers\Admin\CareerController::class, 'career_us_readALL'])->name('admin.readALL.careers')->middleware('auth');

Route::get('/read-career-us-all', [App\Http\Controllers\Admin\CareerController::class, 'career_us_mark_all'])->name('admin.mark_as_read.careers.us')->middleware('auth');


Route::get('/products/get-a-quote', [App\Http\Controllers\Admin\ProductController::class, 'get_a_quote'])->name('admin.get_a_quote')->middleware('auth');
Route::get('/products/get-a-quote/read/{id}', [App\Http\Controllers\Admin\ProductController::class, 'get_a_quote_read'])->name('admin.get_a_quote.mark_as_read')->middleware('auth');

Route::get('/visitors/ip', [App\Http\Controllers\Admin\FrontendController::class, 'visitors_ip'])->name('admin.visitors_ip')->middleware('auth');

// Route::get('/reviews/all', [App\Http\Controllers\Admin\ReviewsController::class, 'reviews'])->name('admin.reviews')->middleware('auth');
Route::get('/newsletter', [SubscriptionController::class, 'index'])->name('admin.newsletter')->middleware('auth');

Route::get('/team/all', [App\Http\Controllers\Admin\TeamController::class, 'team'])->name('admin.team')->middleware('auth');

Route::post('/team/save', [App\Http\Controllers\Admin\TeamController::class, 'team_save'])->name('admin.team.save')->middleware('auth');

Route::post('/team/update', [App\Http\Controllers\Admin\TeamController::class, 'team_update'])->name('admin.team.update')->middleware('auth');

Route::get('/team/delete/{id}', [App\Http\Controllers\Admin\TeamController::class, 'team_delete'])->name('admin.team.delete')->middleware('auth');

Route::get('/generate/sitemap', [App\Http\Controllers\HomeController::class, 'generate_sitemaps'])->name('generate_sitemaps');

Route::get('services/detail/{id}', [App\Http\Controllers\HomeController::class, 'service_detail'])->name('services-details');

Route::get('shop', [App\Http\Controllers\HomeController::class, 'shop'])->name('shop');

/////////
Route::get('/cart',[CartController::class, 'index'])->name('cart');
Route::post('/cart/store',[CartController::class, 'addtoCart'])->name('cart.store');
Route::delete('/cart/remove',[CartController::class, 'removeItem'])->name('cart.remove');
Route::delete('/cart/clear',[CartController::class, 'clearCart'])->name('cart.clear');
Route::put('/cart/update',[CartController::class, 'updateCart'])->name('cart.update');

Route::get('/quote-view',[HomeController::class, 'QuoteView'])->name('quote.view');
Route::get('/checkout',[CartController::class, 'CheckOut'])->name('checkout');

Route::post('/order/store', [OrderController::class, 'store'])->name('order.store');

//Stripe Routes
Route::controller(OrderController::class)->group(function(){
    Route::get('stripe/get', 'stripe')->name('stripe.get');
    Route::post('stripe/post', 'stripePost')->name('stripe.post');
});

Route::get('/order/store', [OrderController::class, 'adminIndex'])->name('admin.orders');
Route::get('/order/view/{id}', [OrderController::class, 'adminViewOrder'])->name('admin.order.view');
Route::get('/order/delete/{id}', [OrderController::class, 'adminDeleteOrder'])->name('admin.order.delete');