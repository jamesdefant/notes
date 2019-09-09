<?php

namespace J\ClassNotes {

  class JFX_07_DataControls extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
Data Controls
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
Data Based Controls in JavaFX
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = '
<h2>Intro</h2>
<p>Some controls hold data - be it from an array, a file, a database, or wherever</p>
<p>For our example we\'ll use a <b>ComboBox</b></p>

<h2>The Setup</h2>
<ol>
  <li>Start a new project</li>
  <li>Open the <code>.fxml</code> file in SceneBuilder</li>
  <li>Add a comboBox to the default pane</li>
  <li>Give the comboBox an <b>fx:id</b> - we\'ll name it <b>uxComboBox</b></li>
  <li>Save the file  <kbd>Ctrl + S</kbd></li>
  <li>
    Navigate to the menubar item <kbd>View</kbd> => <kbd>Show Sample Controller Skeleton</kbd><br>
    <em>This will open the <b>Sample Skeleton for [filename] Controller Class</b> dialog</em> 
  </li>
  <li>Select <b>Full</b> from the bottom-right corner</li>
  <li>Click the <b>Copy</b> button from the bottom-left corner</li>
  <li>Close the dialog</li>
  <li>Switch back to <b>Intelli J</b> and copy the code overwriting the <b>Controller</b> class<br></li>
  <li>
    Alter the <b>Type</b> that the Combox will use - change:<br>
    <code>private ComboBox&lt;?&gt; uxComboBox;</code><br>
    ~to~<br>
    <code>private ComboBox&lt;String&gt; uxComboBox;</code><br>    
  </li>
  <li>
    Create a new method called <code>loadComboData()</code> to load the data into the comboBox
    <pre><code>
    private void loadComboData() {
        ObservableList<String> list = FXCollections.observableArrayList();
        
        list.add("Coffee");
        list.add("Tea");
        list.add("Orange Juice");

        uxComboBox.itemsProperty().setValue(list);
    }
    </code></pre>    
  </li>
  <li>
    Find the <code>initialize()</code> method and add a listener underneath the <code>assert</code> statements:<br>
    <pre><code>
    @FXML
    void initialize() {
        assert uxComboBox != null : "fx:id=\"uxComboBox\" was not injected: check your FXML file \'sample.fxml\'.";

        loadComboData();

        uxComboBox.getSelectionModel().selectedItemProperty().addListener(new ChangeListener<String>() {
            @Override
            public void changed(ObservableValue<? extends String> observable, String oldValue, String newValue) {
                System.out.println(newValue + " selected");
            }
        });
    }    
    </code></pre>
</ol>
<h2>The whole code</h2>
<pre><code>
package sample;

import javafx.beans.value.ChangeListener;
import javafx.beans.value.ObservableValue;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.fxml.FXML;
import javafx.scene.control.ComboBox;

public class Controller {

    @FXML
    private ComboBox<String> uxComboBox;

    @FXML
    void initialize() {
        assert uxComboBox != null : "fx:id=\"uxComboBox\" was not injected: check your FXML file \'sample.fxml\'.";

        loadComboData();

        uxComboBox.getSelectionModel().selectedItemProperty().addListener(new ChangeListener<String>() {
            @Override
            public void changed(ObservableValue<? extends String> observable, String oldValue, String newValue) {
                System.out.println(newValue + " selected\nOldValue: " + oldValue + "\n--------");
            }
        });
    }

    private void loadComboData() {
        ObservableList<String> list = FXCollections.observableArrayList();
        list.add("Coffee");
        list.add("Tea");
        list.add("Booze");

        uxComboBox.itemsProperty().setValue(list);
    }
}
</code></pre>
<hr>

<h2>Tables</h2>
<p>Use <code>SimpleStringProperty</code></p>
<pre><code>
private SimpleStringProperty name;
</code></pre>

';

      return $returnValue;
    }

  }
}