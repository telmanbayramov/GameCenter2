<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Branch;
use App\Models\Seat;
use App\Models\BranchType;

class BranchController extends Controller
{
        public function index()
        {
            $branches = Branch::all();
            return view('branches.index', compact('branches'));
        }

        public function create()
        {
            $branchTypes = BranchType::all(); // BranchType modelini kullanarak tüm türleri al
            return view('branches.create', compact('branchTypes'));
        }

        public function store(Request $request)
        {
            $request->validate([
                'title' => 'required|string|max:255',
                'order' => 'required|integer',
                'branch_type_id' => 'required|integer', // Yeni doğrulama kuralı
            ]);
        
            Branch::create([
                'title' => $request->title,
                'order' => $request->order,
                'branch_type_id' => $request->branch_type_id, // branch_type_id'yi ekle
            ]);
        
            return redirect()->route('branches.index')->with('success', 'Şube başarıyla eklendi.');
        }

        public function edit(Branch $branch)
        {
            return view('branches.edit', compact('branch'));
        }

        public function update(Request $request, Branch $branch)
        {
            $branch->update($request->all());
            return redirect()->route('branches.index');
        }

        
            public function destroy($id)
            {
                $branch = Branch::find($id);
                
                if ($branch) {
                    $branch->delete();
                    return redirect()->route('branches.index')->with('success', 'Şube başarıyla silindi.');
                }
            
                return redirect()   ->route('branches.index')->with('error', 'Şube bulunamadı.');
            }
        
        public function show($id)
        {
            $branch = Branch::findOrFail($id);
            return view('branches.show', compact('branch'));
        }
    }
