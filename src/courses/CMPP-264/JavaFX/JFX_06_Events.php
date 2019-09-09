<?php

namespace J\ClassNotes {

  class JFX_06_Events extends Page
  {

    /*-----------------------------------------------------------------*/
    /* TITLE <title> */
    public function getTitle() : string
    {
      return <<< 'TITLE'
Events
TITLE;
    }

    /*-----------------------------------------------------------------*/
    /* MAIN HEADING <h1> */
    public function getMainHeading() : string
    {
      return <<< 'MAINHEADING'
Events in JavaFX
MAINHEADING;
    }

    /*-----------------------------------------------------------------*/
    /* CONTENT  <main> */
    public function getContent() : string
    {
      $returnValue = '
<h2>Intro</h2>
<p>
  You can assign an event handler to a <b>general action</b> of a control, to a <b>specific event</b> of a
  control, or to a <b>specific property</b> of a control 
</p>
<p>Let\'s show the three ways with a simple example with a CheckBox control</p>

<h2>The Setup</h2>
<ol>
  <li>Start a new project</li>
  <li>Open the <code>.fxml</code> file in SceneBuilder</li>
  <li>Add a checkbox to the default pane</li>
  <li>Give the checkbox an <b>fx:id</b> - we\'ll name it <b>uxCheckbox</b></li>
</ol>

<h2>onAction</h2>
<ol>
  <li>In SceneBuilder, navigate to the <kbd>Code</kbd> panel on the right-hand side of the screen</li>
  <li>
    Add a method to the <kbd>On Action</kbd> field - we\'ll call it<br>
    <b>onAction_uxCheckbox</b>
  </li>
  <li>Save the file  <kbd>Ctrl + S</kbd></li>
  <li>
    Navigate to the menubar item <kbd>View</kbd> => <kbd>Show Sample Controller Skeleton</kbd><br>
    <em>This will open the <b>Sample Skeleton for [filename] Controller Class</b> dialog</em> 
  </li>
  <li>Click the <b>Copy</b> button from the bottom-left corner</li>
  <li>Close the dialog</li>
  <li>
    Switch back to <b>Intelli J</b> and copy the code overwriting the <b>Controller</b> class<br>
    <em>
      The <b>ActionEvent</b> argument of the event handler will need an import. Hover over it and select<br>
      <kbd>Import Class</kbd> => <kbd>ActionEvent(javafx.event)</kbd>
    </em>
  </li>
  <li>
    Add an <code>if</code> statement checking the <code>isSelected()</code> method<br>
    <pre><code>
    @FXML
    void onAction_uxCheckBox(ActionEvent event) {
        if(uxCheckbox.isSelected()) {
            System.out.println("Checkbox selected");
        }
        else {
            System.out.println("Checkbox deselected");
        }
    }    </code></pre>
  </li>  
</ol>
<hr>

<h2>onMouseClicked</h2>
<p>
  <b>This is almost exactly the same as the generic method, except that you define a specific event to call the handler</b>
</p>
<ol>
  <li>In SceneBuilder, navigate to the <kbd>Code</kbd> panel on the right-hand side of the screen</li>
  <li>
    Add a method to the <kbd>On Mouse Clicked</kbd> field - we\'ll call it<br>
    <b>onMouseClicked_uxCheckbox</b>
  </li>
  <li>Save the file  <kbd>Ctrl + S</kbd></li>
  <li>
    Navigate to the menubar item <kbd>View</kbd> => <kbd>Show Sample Controller Skeleton</kbd><br>
    <em>This will open the <b>Sample Skeleton for [filename] Controller Class</b> dialog</em> 
  </li>
  <li>Click the <b>Copy</b> button from the bottom-left corner</li>
  <li>Close the dialog</li>
  <li>
    Switch back to <b>Intelli J</b> and copy the code overwriting the <b>Controller</b> class<br>
    <em>
      The <b>MouseEvent</b> argument of the event handler will need an import. Hover over it and select<br>
      <kbd>Import Class</kbd> => <kbd>MouseEvent(javafx.scene.input)</kbd>
    </em>
  </li>
  <li>
    Add an <code>if</code> statement checking the <code>isSelected()</code> method<br>
    <pre><code>
    @FXML
    void onMouseClicked_uxCheckBox(MouseEvent event) {
        if(uxCheckbox.isSelected()) {
            System.out.println("Checkbox selected");
        }
        else {
            System.out.println("Checkbox deselected");
        }
    }    </code></pre>
  </li>  
</ol>

<h2>Specific Property</h2>
<ol>
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
    Find the <code>initialize()</code> method and add a listener underneath the <code>assert</code> statements:<br>
    <pre><code>
    @FXML
    void initialize() {
        assert uxCheckbox != null : "fx:id=\"uxCheckbox\" was not injected: check your FXML file \'sample.fxml\'.";

        uxCheckbox.selectedProperty().addListener(new ChangeListener<Boolean>() {
            @Override
            public void changed(ObservableValue<? extends Boolean> observable, Boolean oldValue, Boolean newValue) {
                if(newValue) {
                    System.out.println("You Do!!");
                }
                else {
                    System.out.println("Lame ass");
                }
            }
        });
    }    </code></pre>
  </li>
</ol>

';

      return $returnValue;
    }

  }
}