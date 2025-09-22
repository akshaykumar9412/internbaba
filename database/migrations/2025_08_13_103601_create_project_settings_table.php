<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration {
    public function up(): void {
        Schema::create('project_settings', function (Blueprint $table) {
            $table->id();

            // 🔹 Basic Information
            $table->string('project_name')->nullable();
            $table->string('logo')->nullable();
            $table->string('favicon')->nullable();

            // 🔹 SEO & Meta
            $table->string('meta_title')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->text('meta_description')->nullable();
            $table->string('meta_image')->nullable();

            // 🔹 Google & Facebook IDs
            $table->string('google_analytics_id')->nullable();
            $table->string('google_ads_conversion_id')->nullable();
            $table->text('google_ads_remarketing_tag')->nullable();
            $table->string('facebook_pixel_id')->nullable();

            // 🔹 Contact Info
            $table->string('contact_email')->nullable();
            $table->string('contact_phone')->nullable();
            $table->text('contact_address')->nullable();
            $table->text('google_map')->nullable();

            // 🔹 Social Links
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('instagram')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('youtube')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('project_settings');
    }
};
