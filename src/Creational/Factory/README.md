# Factory
Factory Method is a creational design pattern that provides an interface for creating objects in a superclass, but allows subclasses to alter the type of objects that will be created.

أسلوب المصنع (factory method) هو نمط تصميم إنشائي (creational) يوفر واجهة لإنشاء الكائنات (objects) داخل فئات رئيسة (superclasses) لكنها تسمح في نفس الوقت للفئات الثانوية (subclasses) بتغيير نوع تلك الكائنات التي سيتم إنشاؤها.

---

### Applicability: 
* Use the Factory Method when you don’t know beforehand the exact types and dependencies of the objects your code should work with.


* The Factory Method separates product construction code from the code that actually uses the product. Therefore it’s easier to extend the product construction code independently from the rest of the code. 

For example, to add a new product type to the app, you’ll only need to create a new creator subclass and override the factory method in it.

* Use the Factory Method when you want to provide users of your library or framework with a way to extend its internal components.


* Inheritance is probably the easiest way to extend the default behavior of a library or framework. But how would the framework recognize that your subclass should be used instead of a standard component? 

The solution is to reduce the code that constructs components across the framework into a single factory method and let anyone override this method in addition to extending the component itself.

Let’s see how that would work. Imagine that you write an app using an open source UI framework. Your app should have round buttons, but the framework only provides square ones. You extend the standard Button class with a glorious RoundButton subclass. But now you need to tell the main UIFramework class to use the new button subclass instead of a default one.

To achieve this, you create a subclass UIWithRoundButtons from a base framework class and override its createButton method. While this method returns Button objects in the base class, you make your subclass return RoundButton objects. Now use the UIWithRoundButtons class instead of UIFramework. And that’s about it!

* Use the Factory Method when you want to save system resources by reusing existing objects instead of rebuilding them each time.


* You often experience this need when dealing with large, resource-intensive objects such as database connections, file systems, and network resources.

Let’s think about what has to be done to reuse an existing object:

1. First, you need to create some storage to keep track of all of the created objects.
2. When someone requests an object, the program should look for a free object inside that pool.
3. … and then return it to the client code.
4. If there are no free objects, the program should create a new one (and add it to the pool).

That’s a lot of code! And it must all be put into a single place so that you don’t pollute the program with duplicate code.

Probably the most obvious and convenient place where this code could be placed is the constructor of the class whose objects we’re trying to reuse. However, a constructor must always return new objects by definition. It can’t return existing instances.

Therefore, you need to have a regular method capable of creating new objects as well as reusing existing ones. That sounds very much like a factory method.
* استخدم أسلوب المصنع عند عدم معرفة أنواع الكائنات التي ستتعامل شيفرتك معها، وكذلك عند عدم معرفة اعتمادياتها.

يفصل أسلوب المصنع شيفرة إنشاء المنتج عن الشيفرة التي تستخدم المنتج، ومن ثم يكون من السهل زيادة شيفرة إنشاء المنتج بشكل منفصل عن بقية الشيفرة. فمثلًان لإضافة نوع جديد من المنتجات إلى التطبيق، لن تحتاج إلا إلى إنشاء فئة creator فرعية جديدة لتتخطى بها أسلوب المصنع داخلها.


* استخدم أسلوب المصنع حين تريد تزويد مستخدمي مكتبتك أو إطار عملك بطريقة لزيادة عناصره الداخلية.

أسهل طريقة لتوسيع السلوك الافتراضي لمكتبة أو إطار عمل هو الاكتساب أو الوراثة (inheritance)، لكن أنّى لإطار العمل معرفة أن فئتك الفرعية يجب أن تُستخدم بدلًا من العنصر القياسي؟

الحل هو تقليل الشيفرة التي ستنشئ العناصر في إطار العمل إلى أسلوب مصنع وحيد، وتسمح لأي كان أن يتخطى تلك الطريقة إضافة إلى توسعة العنصر ذاته.

لنرى كيفية عمل ذلك، تخيل أنك تكتب تطبيقًا باستخدام إطار عمل مفتوح المصدر لواجهة المستخدم، يجب أن تكون الأزرار في تطبيقك دائرية الحواف، لكن إطار العمل لا يوفر سوى أزرار مربعة. الحل هنا أن توسع فئة Button بفئة فرعية لتكن RoundButton، لكنك الآن ستضطر إلى إخبار فئة UIFramework الرئيسية أن تستخدم فئة الأزرار الفرعية الجديدة بدلًا من الافتراضية.

ولفعل ذلك تنشئ فئة فرعية لتكن UIWithRoundButtons من فئة إطار العمل الأساسية وتتخطى أسلوب createButton الخاص بها، ويمكنك أن تجعل فئتك الفرعية تعيد كائنات RoundButton رغم أن هذا الأسلوب يعيد كائنات Button في فئته الأساسية. والآن لم يتبق سوى أن تستخدم فئة UIWithRoundButtons بدلًا من UIFramework.

* استخدم أسلوب المصنع عند توفير موارد النظام بإعادة استخدام الكائنات الموجودة بدلًا من إعادة إنشائهم في كل مرة.

قد تحدث تلك الحالة حين تتعامل مع كائنات كبيرة وتستهلك الموارد مثل اتصالات قواعد البيانات أو أنظمة الملفات أو موارد الشبكات. إليك ما يجب فعله لإعادة استخدام كائن موجود فعلًا:

1. أولًا عليك توفير بعض المساحة لمتابعة كل الكائنات المنشأة. 
2. عندما يطلب شخص أحد الكائنات فإن البرنامج يبحث عن كائن متاح في حوض الكائنات (object pool)، ثم يعيده إلى شيفرة العميل. 
3. إن لم تكن هناك كائنات متاحة فيجب أن ينشئ البرنامج واحدًا ويضيفه إلى الحوض..

هذه شيفرة طويلة، ويجب أن تجمعها كلها في مكان واحد لكي لا تلوث البرنامج بشيفرة مكررة.

لعل أنسب مكان يمكن أن توضع فيه تلك الشيفرة هو منشئ (constructor) الفئة الذي نحاول أن نعيد استخدام كائناته، لكن يجب أن يعيد المنشئ كائنات جديدة افتراضيًا، فلا يعيد حالات موجودة فعلًا، لذا تحتاج أن يكون لديك أسلوب عادي قادر على إنشاء كائنات جديدة إضافة إلى إعادة استخدام الكائنات الموجودة، وهذا يشبه كثيرًا أسلوب المصنع.

### Problem:
Imagine that you’re creating a logistics management application. The first version of your app can only handle transportation by trucks, so the bulk of your code lives inside the Truck class.

After a while, your app becomes pretty popular. Each day you receive dozens of requests from sea transportation companies to incorporate sea logistics into the app.

Great news, right? But how about the code? At present, most of your code is coupled to the Truck class. Adding Ships into the app would require making changes to the entire codebase. Moreover, if later you decide to add another type of transportation to the app, you will probably need to make all of these changes again.

As a result, you will end up with pretty nasty code, riddled with conditionals that switch the app’s behavior depending on the class of transportation objects.

تخيل أنك تنشئ تطبيقًا لشحن البضائع، ولا تتعامل أول نسخة من ذلك التطبيق إلا مع الشحن البري بالشاحنات (Trucks)، فمن المنطقي حينها أن يكون أغلب شيفرتك البرمجية تحت فئة Trucks، لكن لنفرض أن التطبيق اشتهر بعد مدة وتوسعت الطلبات وبدأت تتلقى طلبات شحن بحري، فإنك ستحتاج عندئذ إلى إضافة فئة جديدة ليكن اسمها Ships مثلًا. لكن هذا الأسلوب سيحدِث تغييرات في كل الشيفرة البرمجية لديك، وإن قررت بعد فترة أخرى إضافة نوع آخر من الشحن إلى التطبيق -الجوي مثلًا- فستخوض هذه العملية كلها مرة ثالثة، وستكون النتيجة شيفرة مزدحمة فوضوية تملؤها العبارات الشرطية التي ستغير سلوك التطبيق بناءً على فئة كائنات الشحن.

---
### References:

[Design Patterns: Factory Method](https://refactoring.guru/design-patterns/factory-method)

[نمط أسلوب المصنع Factory Method - موسوعة حسوب](https://wiki.hsoub.com/Design_Patterns/factory_method)