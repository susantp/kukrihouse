<?php
if (!function_exists('getProductImagesPath')) {
    /**
     * @param null $sku
     * @return array
     */
    function getProductImagesPath($sku = null)
    {
        $sku = strtoupper($sku);
        $absolutePath = public_path("/storage/product-image/$sku");
        $assetPath = asset("storage/product-image/$sku");
        $imagePaths = array();
        foreach (\Illuminate\Support\Facades\File::files($absolutePath) as $file) {
            array_push($imagePaths, $assetPath . '/' . $file->getFilename());
        }
        return $imagePaths;
    }
}

