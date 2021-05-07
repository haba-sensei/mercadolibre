<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
       if($this->user_id == auth()->user()->id){
        return true;
       }else {
           return false;
       }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [
            'name' => 'required',
            'slug' => 'required|unique:products',
            'status' => 'required|in:1,2',
            'file' => 'required|image|max:2048'
        ];

          if($this->status == 2) {
              $rules = array_merge($rules, [
                  'amount' => 'required|numeric',
                  'stock' => 'required|numeric',
                  'body' => 'required',
                  'extract' => 'required',
                  'category_id' => 'required',
                  'tag_id' => 'required',
                  'bulkfiles.*' => 'required|mimes:jpeg,jpg,png',
                  'bulkfilesNum' => 'numeric|min:1|max:5',

              ]);
          }


          return $rules;
    }
}
