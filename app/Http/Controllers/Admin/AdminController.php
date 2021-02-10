<?php

namespace App\Http\Controllers\Admin;

use App\About\About;
use App\Countries\Countries;
use App\Http\Controllers\Controller;
use App\Http\Requests\About\AboutRequest;
use App\Http\Requests\Country\CountryRequest;
use App\Http\Requests\Country\EditCountryRequest;
use App\Http\Requests\News\EditNewsRequest;
use App\Http\Requests\News\NewsRequest;
use App\Http\Requests\Order\EditOrderRequest;
use App\Http\Requests\Price\EditPriceRequest;
use App\Http\Requests\Price\PriceRequest;
use App\Http\Requests\Question\EditQuestionRequest;
use App\Http\Requests\Question\QuestionRequest;
use App\Http\Requests\Store\EditStoreRequest;
use App\Http\Requests\Store\StoreRequest;
use App\Http\Requests\Terms\TermsRequest;
use App\News\News;
use App\Orders\Orders;
use App\Prices\Prices;
use App\Questions\Questions;
use App\Stores\Stores;
use App\Terms\Terms;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function about(AboutRequest $request)
    {
        if (About::find(1)) {
            $about = About::find(1);
        }
        else {
            $about = new About();
        }
        $about->content = $request->mycontent;
        $about->save();
        return response()->json([
            'status' => true,
            'message' => 'success'
        ]);
    }

    public function terms(TermsRequest $request)
    {
        if (Terms::find(1)) {
            $terms = Terms::find(1);
        }
        else {
            $terms = new Terms();
        }
        $terms->content = $request->mycontent;
        $terms->save();
        return response()->json([
            'status' => true,
            'message' => 'success'
        ]);
    }

    public function add_price(PriceRequest $request)
    {
        $add_price = Prices::create($request->validated());
        return response()->json([
            'status' => true,
            'message' => 'success',
            'id' => $add_price->id,
        ]);
    }

    public function delete_price(Request $request)
    {
        Prices::destroy($request->id);
        return response()->json([
            'status' => true,
            'message' => 'success'
        ]);
    }

    public function edit_price(EditPriceRequest $request)
    {
        $edit_price = Prices::find($request->id);
        $edit_price->price = $request->new_price;
        $edit_price->weight = $request->new_weight;
        $edit_price->type = $request->new_type;
        $edit_price->country = $request->new_country;
        $edit_price->save();
        return response()->json([
            'status' => true,
            'message' => 'success'
        ]);
    }

    public function add_country(CountryRequest $request)
    {
        $add_country = new Countries();
        $add_country->country = $request->country;
        if ($request->hasfile('flag')){
            $file = $request->file('flag');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('../public/images/', $filename);
            $add_country->flag = $filename;
        }
        $add_country->save();
        return response()->json([
            'status' => true,
            'message' => 'success',
            'id' => $add_country->id,
            'flag' => $filename,
        ]);
    }


    public function delete_country(Request $request)
    {
        $id = $request->id;
        $delete_country = Countries::find($id);
        $file_path = app_path("../public/images/{$delete_country->flag}");
        unlink($file_path);
        $delete_country->delete();
        return response()->json([
            'status' => true,
            'message' => 'success'
        ]);
    }

    public function edit_country(EditCountryRequest $request)
    {
        $edit_country = Countries::find($request->id);
        $edit_country->country = $request->new_country;
        $filename = 1;
        if ($request->hasfile('new_flag')){
            $file_path = app_path("../public/images/{$edit_country->flag}");
            unlink($file_path);
            $file = $request->file('new_flag');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('../public/images/', $filename);
            $edit_country->flag = $filename;
        }
        $edit_country->save();
        return response()->json([
            'status' => true,
            'message' => 'success',
            'flag' => $filename
        ]);
    }

    public function add_store(StoreRequest $request)
    {
        $add_store = new Stores();
        $add_store->link = $request->link;
        if ($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('../public/images/', $filename);
            $add_store->image = $filename;
        }
        $add_store->save();
        return response()->json([
            'status' => true,
            'message' => 'success',
            'id' => $add_store->id,
            'image' => $filename,
        ]);
    }


    public function delete_store(Request $request)
    {
        $id = $request->id;
        $delete_store = Stores::find($id);
        $file_path = app_path("../public/images/{$delete_store->image}");
        unlink($file_path);
        $delete_store->delete();
        return response()->json([
            'status' => true,
            'message' => 'success'
        ]);
    }

    public function edit_store(EditStoreRequest $request)
    {
        $edit_store = Stores::find($request->id);
        $edit_store->link = $request->new_link;
        $filename = 1;
        if ($request->hasfile('new_image')){
            $file_path = app_path("../public/images/{$edit_store->image}");
            unlink($file_path);
            $file = $request->file('new_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('../public/images/', $filename);
            $edit_store->image = $filename;
        }
        $edit_store->save();
        return response()->json([
            'status' => true,
            'message' => 'success',
            'image' => $filename
        ]);
    }

    public function add_news(NewsRequest $request)
    {
        $add_news = new News();
        $add_news->header = $request->header;
        $add_news->content = $request->mycontent;
        if ($request->hasfile('picture')){
            $file = $request->file('picture');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('../public/images/', $filename);
            $add_news->picture = $filename;
        }
        $add_news->save();
        return response()->json([
            'status' => true,
            'message' => 'success'
        ]);
    }


    public function delete_news(Request $request)
    {
        $id = $request->id;
        $delete_news = News::find($id);
        $file_path = app_path("../public/images/{$delete_news->picture}");
        unlink($file_path);
        $delete_news->delete();
        return response()->json([
            'status' => true,
            'message' => 'success'
        ]);
    }

    public function edit_news(EditNewsRequest $request)
    {
        $edit_news = News::find($request->id);
        $edit_news->header = $request->header;
        $edit_news->content = $request->mycontent;
        $filename = 1;
        if ($request->hasfile('picture')){
            $file_path = app_path("../public/images/{$edit_news->picture}");
            unlink($file_path);
            $file = $request->file('picture');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('../public/images/', $filename);
            $edit_news->picture = $filename;
        }
        $edit_news->save();
        return response()->json([
            'status' => true,
            'message' => 'success',
            'picture' => $filename
        ]);
    }

    public function delete_order(Request $request)
    {
        $id = $request->id;
        $delete_orders = Orders::find($id);
        $file_path = app_path("../public/files/{$delete_orders->invoice}");
        unlink($file_path);
        $delete_orders->delete();
        return response()->json([
            'status' => true,
            'message' => 'success'
        ]);
    }

    public function edit_order(EditOrderRequest $request)
    {
        $edit_orders = Orders::find($request->id);
        $edit_orders->storage = $request->storage;
        $edit_orders->website = $request->website;
        $edit_orders->track = $request->track;
        $edit_orders->category = $request->category;
        $edit_orders->count = $request->count;
        $edit_orders->price = $request->price;
        $edit_orders->currency = $request->currency;
        $edit_orders->information = $request->information;
        $edit_orders->status = $request->status;
        $edit_orders->liquid = $request->liquid;
        $edit_orders->save();
        return response()->json([
            'status' => true,
            'message' => 'success'
        ]);
    }

    public function add_question(QuestionRequest $request)
    {
        $add_question = Questions::create($request->validated());
        return response()->json([
            'status' => true,
            'message' => 'success',
            'id' => $add_question->id
        ]);
    }

    public function delete_question(Request $request)
    {
        Questions::destroy($request->id);
        return response()->json([
            'status' => true,
            'message' => 'success'
        ]);
    }

    public function edit_question(EditQuestionRequest $request)
    {
        $edit_question = Questions::find($request->id);
        $edit_question->question = $request->new_question;
        $edit_question->answer = $request->new_answer;
        $edit_question->save();
        return response()->json([
            'status' => true,
            'message' => 'success'
        ]);
    }
}
