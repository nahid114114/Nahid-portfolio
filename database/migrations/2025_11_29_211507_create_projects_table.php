public function up()
{
    Schema::create('projects', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->text('description')->nullable();
        $table->string('link')->nullable();
        $table->string('image')->nullable(); // stored path in storage
        $table->timestamps();
    });
}
