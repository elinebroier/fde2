<?php


namespace App\Http\Controllers;

use DB;
use App\Models\Faq;

class FAQController
{

    public function index()
{
    // Render a list of a resource
    $faqs = Faq::latest()->get();

    return view('faq.index', ['faqs' => $faqs]);
}

    public function show(Faq $faq)
    {
        // Show a single resource

        return view('faq.show',['faq' => $faq]);

        //return view('faq', [
        //'faqs' => Faq::all()
        //]);
    }

   public function create()
    {
        // Shows a view to create a new resource
        return view('faq.create');
    }

    public function store()
    {
        // Persist the new resource
        Faq::create($this->validateFaq());

        return redirect(route('faq.index'));
    }

     public function edit(Faq $faq)
    {
        // Find the article associated with the id


        // Show a view to edit an existing resource
        return view('faq.edit', compact('faq'));

    }

    public function update(Faq $faq)
    {
        // Persist the edited resource
        $faq->update($this->validateFaq());

        return redirect($faq->path());
    }

    public function destroy($id)
    {
        // Delete the resource
        Faq::find($id)->delete();

        return redirect(route('faq.index'));
    }

    protected function validateFaq(): array
    {
        return request()->validate([
            'question' => 'required',
            'answer' => 'required'
        ]);
    }

}
