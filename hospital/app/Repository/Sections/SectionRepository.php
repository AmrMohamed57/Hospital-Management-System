<?php   
namespace App\Repository\Sections;

use App\Interfaces\Sections\SectionRepositoryInterface;
use App\Models\Doctor;
use App\Models\Section;


class SectionRepository implements  SectionRepositoryInterface
{     
    public function index()
    {
        $sections = Section::all();
        return view('dashboard.sections.index' , compact('sections'));
    }

    public function show($id)
    {
        $doctors =Section::findOrFail($id)->doctors;
        
        $section = Section::findOrFail($id);
        return view('dashboard.sections.show_doctors',compact('doctors','section'));
    }

    public function store($request)
    {
        Section::create([
            'name' => $request->input('name'),
        ]);

        session()->flash('add');
        return redirect()->route('Sections.index');
    }


    public function update($request)
    {
        $section = Section::find($request->input('id'));
        $section->update([
            'name' => $request->input('name'),
            ]);
            session()->flash('edit');
            return redirect()->route('Sections.index');
    }

    public function destroy($request)
    {
        Section::find($request->id)->delete();
        
        session()->flash('delete');
        return redirect()->route('Sections.index');
    }
}