<x-layouts.app :title="__('Products')">
    <div class="relative mb-6 w-full">
        <flux:heading size="xl">Add New Product</flux:heading>
        <flux:subheading size="lg" class="mb-6">Manage data Products</flux:subheading>
        <flux:separator variant="subtle" />
    </div>

    @if(session()->has('successMessage'))
    <flux:badge color="lime" class="mb-3 w-full">{{ session()->get('successMessage') }}</flux:badge>
    @elseif(session()->has('errorMessage'))
    <flux:badge color="red" class="mb-3 w-full">{{ session()->get('errorMessage') }}</flux:badge>
    @endif

    <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
        @csrf

        <flux:input label="Name" name="name" class="mb-3" placeholder="Product Name" :value="old('name')" />
        @error('name')
            <div class="text-red-500 text-sm mb-3">{{ $message }}</div>
        @enderror

        <flux:select label="Category" name="product_category_id" class="mb-3">
            @foreach ($categories as $category)
                <option value="{{ $category->id }}" {{ old('product_category_id') == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
            @endforeach
        </flux:select>
        @error('product_category_id')
            <div class="text-red-500 text-sm mb-3">{{ $message }}</div>
        @enderror

        <flux:textarea label="Description" name="description" class="mb-3" placeholder="Product Description">{{ old('description') }}</flux:textarea>
        @error('description')
            <div class="text-red-500 text-sm mb-3">{{ $message }}</div>
        @enderror

        <flux:input label="Price" name="price" type="number" class="mb-3" placeholder="Product Price" :value="old('price')" />
        @error('price')
            <div class="text-red-500 text-sm mb-3">{{ $message }}</div>
        @enderror

        <flux:input label="Stock" name="stock" type="number" class="mb-3" placeholder="Available Stock" :value="old('stock')" />
        @error('stock')
            <div class="text-red-500 text-sm mb-3">{{ $message }}</div>
        @enderror

        <flux:input type="file" label="Image" name="image_url" class="mb-3" id="image_url" onchange="previewImage(event)" />
        @error('image_url')
            <div class="text-red-500 text-sm mb-3">{{ $message }}</div>
        @enderror

        <img id="image_preview" src="#" alt="Image Preview" class="hidden mb-3 w-32 h-32 object-cover" />

        <flux:separator />

        <div class="mt-4">
            <flux:button type="submit" variant="primary">Simpan</flux:button>
            <flux:link href="{{ route('products.index') }}" variant="ghost" class="ml-3">Kembali</flux:link>
        </div>
    </form>

    <script>
        function previewImage(event) {
            const input = event.target;
            const preview = document.getElementById('image_preview');
            if (input.files && input.files[0]) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    preview.src = e.target.result;
                    preview.classList.remove('hidden');
                }
                reader.readAsDataURL(input.files[0]);
            } else {
                preview.src = '#';
                preview.classList.add('hidden');
            }
        }
    </script>
</x-layouts.app>
