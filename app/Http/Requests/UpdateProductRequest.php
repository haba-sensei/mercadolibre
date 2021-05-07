<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Validator;

class UpdateProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $product = $this->route()->parameter('product');

        $rules = [
            'name' => 'required',
            'slug' => "required|unique:products,slug,$product->id",
            'status' => 'required|in:1,2',
            'file' => 'image|max:2048'
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

    public function messages() {
        return [
          'bulkfiles.*.max' => 'Image size should be less than 2mb',
          'bulkfiles.*.mimes' => 'Only jpeg, png, bmp,tiff files are allowed.',
          'bulkfiles.max' => 'Only 5 images are allowed'
        ];
      }
}
