# KNanoId

### PHP版的NanoId
### 高性能id生成器


```php
    $generator = new NanoIdGenerator();

    $size = 7;
    $mate = (new Mate())->setSize($size);
    $id = $generator->generateId($mate);
    var_dump($id);
    $this->assertEquals($size, strlen($id));
    $this->assertNotEquals(str_repeat('_', $size), $id);

    $mate = (new Mate())->setAlphabet('zheshijiezhenhao');
    $id = $generator->generateId($mate);
    var_dump($id);
    $this->assertEquals(21, strlen($id));
    $this->assertNotEquals(str_repeat('_', 21), $id);

    $defaultRandom = $generator->generateId();
    var_dump($defaultRandom);
    $this->assertEquals(21, strlen($defaultRandom));
    $this->assertNotEquals(str_repeat('_', 21), $defaultRandom);

```