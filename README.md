# CodeIgniter Array Helpers - Compare arrays

## Compares two arrays using their common (intersection) keys
This helper extends the core helper and adds a fuction that compares the values of two associative arrays based on their intersection of keys.

## Usage
Copy *MY_array_helper.php* to *application/helpers* folder.

Load array helper:

    $this->load->helper('array');


Use it:

    if (!compare($data['article'], $this->input->post())) {

        //Do something like create a revision

    }
    //Then update your article