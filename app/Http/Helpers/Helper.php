<?php

use App\Models\ProjectSetting;
use Illuminate\Support\Facades\Cache;
function getProductData(){
    $data =  [
            [
                "id" => 1,
                "title" => "Essence Mascara Lash Princess",
                "price" => 9.99,
                "category" => "beauty",
                "rating" => 2.56,
                "stock" => 99,
                "brand" => "Essence",
                "sku" => "BEA-ESS-ESS-001"
            ],
            [
                "id" => 2,
                "title" => "Eyeshadow Palette with Mirror",
                "price" => 19.99,
                "category" => "beauty",
                "rating" => 2.86,
                "stock" => 34,
                "brand" => "Glamour Beauty",
                "sku" => "BEA-GLA-EYE-002"
            ],
            [
                "id" => 3,
                "title" => "Powder Canister",
                "price" => 14.99,
                "category" => "beauty",
                "rating" => 4.64,
                "stock" => 89,
                "brand" => "Velvet Touch",
                "sku" => "BEA-VEL-POW-003"
            ],
            [
                "id" => 4,
                "title" => "Red Lipstick",
                "price" => 12.99,
                "category" => "beauty",
                "rating" => 4.36,
                "stock" => 91,
                "brand" => "Chic Cosmetics",
                "sku" => "BEA-CHI-LIP-004"
            ],
            [
                "id" => 5,
                "title" => "Red Nail Polish",
                "price" => 8.99,
                "category" => "beauty",
                "rating" => 4.32,
                "stock" => 79,
                "brand" => "Nail Couture",
                "sku" => "BEA-NAI-NAI-005"
            ],
            [
                "id" => 6,
                "title" => "Calvin Klein CK One",
                "price" => 49.99,
                "category" => "fragrances",
                "rating" => 4.37,
                "stock" => 29,
                "brand" => "Calvin Klein",
                "sku" => "FRA-CAL-CAL-006"
            ],
            [
                "id" => 7,
                "title" => "Chanel Coco Noir Eau De",
                "price" => 129.99,
                "category" => "fragrances",
                "rating" => 4.26,
                "stock" => 58,
                "brand" => "Chanel",
                "sku" => "FRA-CHA-CHA-007"
            ],
            [
                "id" => 8,
                "title" => "Dior J'adore",
                "price" => 89.99,
                "category" => "fragrances",
                "rating" => 3.8,
                "stock" => 98,
                "brand" => "Dior",
                "sku" => "FRA-DIO-DIO-008"
            ],
            [
                "id" => 9,
                "title" => "Dolce Shine Eau de",
                "price" => 69.99,
                "category" => "fragrances",
                "rating" => 3.96,
                "stock" => 4,
                "brand" => "Dolce & Gabbana",
                "sku" => "FRA-DOL-DOL-009"
            ],
            [
                "id" => 10,
                "title" => "Gucci Bloom Eau de",
                "price" => 79.99,
                "category" => "fragrances",
                "rating" => 2.74,
                "stock" => 91,
                "brand" => "Gucci",
                "sku" => "FRA-GUC-GUC-010"
            ],
            [
                "id" => 11,
                "title" => "Annibale Colombo Bed",
                "price" => 1899.99,
                "category" => "furniture",
                "rating" => 4.77,
                "stock" => 88,
                "brand" => "Annibale Colombo",
                "sku" => "FUR-ANN-ANN-011"
            ],
            [
                "id" => 12,
                "title" => "Annibale Colombo Sofa",
                "price" => 2499.99,
                "category" => "furniture",
                "rating" => 3.92,
                "stock" => 60,
                "brand" => "Annibale Colombo",
                "sku" => "FUR-ANN-ANN-012"
            ],
            [
                "id" => 13,
                "title" => "Bedside Table African Cherry",
                "price" => 299.99,
                "category" => "furniture",
                "rating" => 2.87,
                "stock" => 64,
                "brand" => "Furniture Co.",
                "sku" => "FUR-FUR-BED-013"
            ],
            [
                "id" => 14,
                "title" => "Knoll Saarinen Executive Conference Chair",
                "price" => 499.99,
                "category" => "furniture",
                "rating" => 4.88,
                "stock" => 26,
                "brand" => "Knoll",
                "sku" => "FUR-KNO-KNO-014"
            ],
            [
                "id" => 15,
                "title" => "Wooden Bathroom Sink With Mirror",
                "price" => 799.99,
                "category" => "furniture",
                "rating" => 3.59,
                "stock" => 7,
                "brand" => "Bath Trends",
                "sku" => "FUR-BAT-WOO-015"
            ],
            [
                "id" => 16,
                "title" => "Apple",
                "price" => 1.99,
                "category" => "groceries",
                "rating" => 4.19,
                "stock" => 8,
                "sku" => "GRO-BRD-APP-016"
            ],
            [
                "id" => 17,
                "title" => "Beef Steak",
                "price" => 12.99,
                "category" => "groceries",
                "rating" => 4.47,
                "stock" => 86,
                "sku" => "GRO-BRD-BEE-017"
            ],
            [
                "id" => 18,
                "title" => "Cat Food",
                "price" => 8.99,
                "category" => "groceries",
                "rating" => 3.13,
                "stock" => 46,
                "sku" => "GRO-BRD-FOO-018"
            ],
            [
                "id" => 19,
                "title" => "Chicken Meat",
                "price" => 9.99,
                "category" => "groceries",
                "rating" => 3.19,
                "stock" => 97,
                "sku" => "GRO-BRD-CHI-019"
            ],
            [
                "id" => 20,
                "title" => "Cooking Oil",
                "price" => 4.99,
                "category" => "groceries",
                "rating" => 4.8,
                "stock" => 10,
                "sku" => "GRO-BRD-COO-020"
            ],
            [
                "id" => 21,
                "title" => "Cucumber",
                "price" => 1.49,
                "category" => "groceries",
                "rating" => 4.07,
                "stock" => 84,
                "sku" => "GRO-BRD-CUC-021"
            ],
            [
                "id" => 22,
                "title" => "Dog Food",
                "price" => 10.99,
                "category" => "groceries",
                "rating" => 4.55,
                "stock" => 71,
                "sku" => "GRO-BRD-FOO-022"
            ],
            [
                "id" => 23,
                "title" => "Eggs",
                "price" => 2.99,
                "category" => "groceries",
                "rating" => 2.53,
                "stock" => 9,
                "sku" => "GRO-BRD-EGG-023"
            ],
            [
                "id" => 24,
                "title" => "Fish Steak",
                "price" => 14.99,
                "category" => "groceries",
                "rating" => 3.78,
                "stock" => 74,
                "sku" => "GRO-BRD-FIS-024"
            ],
            [
                "id" => 25,
                "title" => "Green Bell Pepper",
                "price" => 1.29,
                "category" => "groceries",
                "rating" => 3.25,
                "stock" => 33,
                "sku" => "GRO-BRD-GRE-025"
            ],
            [
                "id" => 26,
                "title" => "Green Chili Pepper",
                "price" => 0.99,
                "category" => "groceries",
                "rating" => 3.66,
                "stock" => 3,
                "sku" => "GRO-BRD-GRE-026"
            ],
            [
                "id" => 27,
                "title" => "Honey Jar",
                "price" => 6.99,
                "category" => "groceries",
                "rating" => 3.97,
                "stock" => 34,
                "sku" => "GRO-BRD-HON-027"
            ],
            [
                "id" => 28,
                "title" => "Ice Cream",
                "price" => 5.49,
                "category" => "groceries",
                "rating" => 3.39,
                "stock" => 27,
                "sku" => "GRO-BRD-CRE-028"
            ],
            [
                "id" => 29,
                "title" => "Juice",
                "price" => 3.99,
                "category" => "groceries",
                "rating" => 3.94,
                "stock" => 50,
                "sku" => "GRO-BRD-JUI-029"
            ],
            [
                "id" => 30,
                "title" => "Kiwi",
                "price" => 2.49,
                "category" => "groceries",
                "rating" => 4.93,
                "stock" => 99,
                "sku" => "GRO-BRD-KIW-030"
            ]
        ];
    return $data;
}

if (!function_exists('get_setting')) {
    function get_setting($column, $default = null) {
        // Cache key (settings data store karne ke liye)
        $cacheKey = 'project_settings';

        // Cache me check karo, nahi milta to DB se fetch karo (1 hour ke liye store)
        $settings = Cache::remember($cacheKey, now()->addHours(1), function () {
            return ProjectSetting::first();
        });

        // Agar DB me record nahi mila
        if (!$settings) {
            return $default;
        }

        // Column return karo agar exist karta ho
        return $settings->{$column} ?? $default;
    }
}


