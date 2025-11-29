public function up()
{
    Schema::create('abouts', function (Blueprint $table) {
        $table->id();
        $table->text('bio')->nullable();
        $table->string('profile_image')->nullable();
        $table->string('location')->nullable();
        $table->string('email')->nullable();
        $table->timestamps();
    });
}
