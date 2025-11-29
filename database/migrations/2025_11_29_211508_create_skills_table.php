public function up()
{
    Schema::create('skills', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->tinyInteger('level')->default(0); // 0-100 percentage or 1-5
        $table->timestamps();
    });
}
