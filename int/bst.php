<?php
/**
 * Implement the following:
 * - add
 * - preorder traversal
 * - in order traversal
 * - post order traversal
 * - breadth first search
 * - search
 **/

class Node
{
    public $data;
    public $left;
    public $right;
    public $level;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function __toString()
    {
        return strval($this->data);
    }

    public function getChildren()
    {
        return array($this->left, $this->right);
    }
}


class BST
{
    public $root;

    public function __construct()
    {
        $this->root = null;
    }

    public function add($data)
    {
        $node = new Node($data);
        if ($this->root == null) {
            $this->root = $node;
            return;
        }

        $current = $this->root;
        while(true) {
            if ($node->data == $current->data) {
                return;
            }
            if ($node->data > $current->data) {
                if ($current->right == null) {
                    $current->right = $node;
                    return;
                } else {
                    $current = $current->right;
                }
            }
            if ($node->data < $current->data) {
                if ($current->left == null) {
                    $current->left = $node;
                    return;
                } else {
                    $current = $current->left;
                }
            }
        }
    }

    public function bfs()
    {
        $queue  = array($this->root);
        $level = 1;

        while (count($queue) > 0) {

            $current = array_shift($queue);
            if ($current->level > $level) {
                $level++;
                echo "\n";
            }
            echo $current. "  ";
            if ($current->left) {
                $current->left->level++;
                $queue[] = $current->left;
            }
            if ($current->right) {
                $current->right->level++;
                $queue[] = $current->right;
            }

        }
    }

    /*
     * root, left, right
     */
    public function preorder($node = null)
    {
        if ($node == null) {
            $node = $this->root;
        }
        echo $node. " ";
        if (!empty($node->left)) {
            $this->preorder($node->left);
        }
        if (!empty($node->right)) {
            $this->preorder($node->right);
        }
    }

    public function inorder($node = null)
    {
        if ($node == null) {
            $node = $this->root;
        }
        if (!empty($node->left)) {
            $this->inorder($node->left);
        }

        echo $node. " ";

        if (!empty($node->right)) {
            $this->inorder($node->right);
        }
    }

    public function postorder($node = null)
    {
        if ($node == null) {
            $node = $this->root;
        }
        if (!empty($node->left)) {
            $this->postorder($node->left);
        }

        if (!empty($node->right)) {
            $this->postorder($node->right);
        }

        echo $node. " ";

    }


    public function search()
    {
    }
}

$bst = new BST();
$numbers = array(5, 3, 2, 1, 8, 7, 6, 10);
foreach ($numbers as $num) {
    $bst->add($num);
}


#$bst->bfs();
#$bst->preorder();
$bst->postorder();
