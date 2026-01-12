<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ImageController extends Controller
{
    private $jsonPath;

    public function __construct() {
        $this->jsonPath = storage_path('app/images.json');
        // Initialize JSON file if it doesn't exist
        if (!File::exists($this->jsonPath)) {
            File::put($this->jsonPath, json_encode([]));
        }
    }

    public function edit($key) {
        if (!session('is_admin_logged_in')) return redirect()->route('login');
        return view('admin.edit_image', compact('key'));
    }

    public function update(Request $request, $key) {
        $request->validate(['image' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048']);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $fileName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('images'), $fileName);

            // Update JSON data
            $data = json_decode(File::get($this->jsonPath), true);
            $data[$key] = $fileName;
            File::put($this->jsonPath, json_encode($data));

            return redirect()->route('home')->with('success', 'Image updated successfully!');
        }
    }
}