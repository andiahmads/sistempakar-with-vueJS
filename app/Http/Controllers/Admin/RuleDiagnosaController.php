<?php

namespace App\Http\Controllers\Admin;

use App\Rule;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RuleDiagnosaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rules = Rule::orderBy('id', 'asc')->get();
        return view('admin.rule-diagnosa.index', compact('rules'));
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'code_rule' => 'required|string|max:191|min:5|unique:rules',
            'rule_diagnosa' => 'required|string|max:191|min:5|unique:rules',
        ]);
        $rule = new Rule();
        $rule->code_rule = strtoupper($request->code_rule);
        $rule->rule_diagnosa = $request->rule_diagnosa;
        $rule->save();
        Toastr::success('rule berhasil ditambahkan', 'Success');
        return redirect()->route('admin.rule-diagnosa.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rule = Rule::find($id);
        return view('admin.rule-diagnosa.component.form-edit-rule', compact('rule'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'code_rule' => 'required|string|min:5',
            'rule_diagnosa' => 'required|string||min:5|',
        ]);
        $rule = Rule::find($id);
        $rule->code_rule = strtoupper($request->code_rule);
        $rule->rule_diagnosa = $request->rule_diagnosa;
        $rule->save();
        Toastr::success('rule berhasil diupdate', 'Success');
        return redirect()->route('admin.rule-diagnosa.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rule = Rule::findOrFail($id);
        $rule->delete();
        Toastr::success('rule berhasil dihapus', 'Success');
        return redirect()->route('admin.rule-diagnosa.index');

    }
}
