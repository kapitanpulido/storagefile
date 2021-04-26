# Laravel Storage File Upload

This Laravel package contains methods for:

* Generating unique filename
* Saving uploaded file on a folder
* Deleting file on a folder

Uploaded files will be saved on the storage folder *(storage/app/public)*.

## Installation

```bash
composer require kapitanpulido/storagefile
```

## Usage

```php
use kapitanpulido\StorageFile\StorageFile;

$model = Model::find($id);

if ($file = $request->file('element')){
  if ($model->filename){
    StorageFile::deleteFile('my_folder', $model->filename);
  }

  $unique_filename = StorageFile::generateUniqueFileName('my_folder', $file->getClientOriginalName());

  StorageFile::saveFile($file, 'my_folder', $unique_filename);
}
```

## License
[MIT](https://choosealicense.com/licenses/mit/)

## Donate

If you can afford, please consider [donating](https://www.paypal.me/kapitanpulido), but no worries if you cannot, use this for absolutely free.
